// click on .btnMetamask to connect to metamask
document
    .querySelector(".btnMetamask")
    .addEventListener("click", async function () {
        let accounts = await ethereum.request({
            method: "eth_requestAccounts",
        });
        const account = accounts[0];

        // add account to #account
        document.querySelector("#account").value = account;

        const provider = new ethers.providers.Web3Provider(window.ethereum);
        const signer = provider.getSigner();
        let signature = await signer.signMessage("Hello World");
        document.querySelector("#signature").value = signature;

        // show button to validate
        document.querySelector(".btnValidate").style.display = "block";
    });
