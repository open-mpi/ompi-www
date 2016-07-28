<?
$subject_val = "[OMPI users] Problems with SSH";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 21 10:36:32 2009" -->
<!-- isoreceived="20090421143632" -->
<!-- sent="Tue, 21 Apr 2009 10:36:25 -0400" -->
<!-- isosent="20090421143625" -->
<!-- name="Luis Vitorio Cargnini" -->
<!-- email="lvcargnini_at_[hidden]" -->
<!-- subject="[OMPI users] Problems with SSH" -->
<!-- id="CA7EB605-2F69-41AB-B092-2779314BB01B_at_gmail.com" -->
<!-- charset="US-ASCII" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> [OMPI users] Problems with SSH<br>
<strong>From:</strong> Luis Vitorio Cargnini (<em>lvcargnini_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-21 10:36:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9004.php">George Bosilca: "Re: [OMPI users] COMM_ACCEPT/COMM_CONNECT: what BTL will the connected processes use?"</a>
<li><strong>Previous message:</strong> <a href="9002.php">Luis Vitorio Cargnini: "[OMPI users] few Problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9031.php">Jeff Squyres: "Re: [OMPI users] Problems with SSH"</a>
<li><strong>Reply:</strong> <a href="9031.php">Jeff Squyres: "Re: [OMPI users] Problems with SSH"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
Please I did as mentioned into the FAQ for SSH password-less but the  
<br>
mpirun still requesting me the password ?
<br>
<p>-bash-3.2$ mpirun -d -v -hostfile chosts -np 16  ./hello
<br>
[cluster-srv0.logti.etsmtl.ca:31929] procdir: /tmp/openmpi-sessions-AH72000_at_[hidden]_0 
<br>
/41688/0/0
<br>
[cluster-srv0.logti.etsmtl.ca:31929] jobdir: /tmp/openmpi-sessions-AH72000_at_[hidden]_0 
<br>
/41688/0
<br>
[cluster-srv0.logti.etsmtl.ca:31929] top: openmpi-sessions-AH72000_at_[hidden]_0
<br>
[cluster-srv0.logti.etsmtl.ca:31929] tmp: /tmp
<br>
[cluster-srv0.logti.etsmtl.ca:31929] mpirun: reset PATH: /export/ 
<br>
cluster/appl/x86_64/llvm/bin:/bin:/sbin:/export/cluster/appl/x86_64/ 
<br>
llvm/bin:/usr/local/llvm/bin:/usr/local/bin:/usr/bin:/usr/sbin:/home/ 
<br>
GTI420/AH72000/oe/bitbake/bin
<br>
[cluster-srv0.logti.etsmtl.ca:31929] mpirun: reset LD_LIBRARY_PATH: / 
<br>
export/cluster/appl/x86_64/llvm/lib:/lib64:/lib:/export/cluster/appl/ 
<br>
x86_64/llvm/lib:/usr/lib64:/usr/lib:/usr/local/lib64:/usr/local/lib
<br>
AH72000_at_[hidden]'s password: AH72000_at_[hidden] 
<br>
's password: AH72000_at_[hidden]'s password:
<br>
[cluster-srv1.logti.etsmtl.ca:02621] procdir: /tmp/openmpi-sessions-AH72000_at_[hidden]_0 
<br>
/41688/0/1
<br>
[cluster-srv1.logti.etsmtl.ca:02621] jobdir: /tmp/openmpi-sessions-AH72000_at_[hidden]_0 
<br>
/41688/0
<br>
[cluster-srv1.logti.etsmtl.ca:02621] top: openmpi-sessions-AH72000_at_[hidden]_0
<br>
[cluster-srv1.logti.etsmtl.ca:02621] tmp: /tmp
<br>
<p><p>Permission denied, please try again.
<br>
AH72000_at_[hidden]'s password:
<br>
[cluster-srv3.logti.etsmtl.ca:09730] procdir: /tmp/openmpi-sessions-AH72000_at_[hidden]_0 
<br>
/41688/0/3
<br>
[cluster-srv3.logti.etsmtl.ca:09730] jobdir: /tmp/openmpi-sessions-AH72000_at_[hidden]_0 
<br>
/41688/0
<br>
[cluster-srv3.logti.etsmtl.ca:09730] top: openmpi-sessions-AH72000_at_[hidden]_0
<br>
[cluster-srv3.logti.etsmtl.ca:09730] tmp: /tmp
<br>
<p>Permission denied, please try again.
<br>
AH72000_at_[hidden]'s password:
<br>
[cluster-srv2.logti.etsmtl.ca:12802] procdir: /tmp/openmpi-sessions-AH72000_at_[hidden]_0 
<br>
/41688/0/2
<br>
[cluster-srv2.logti.etsmtl.ca:12802] jobdir: /tmp/openmpi-sessions-AH72000_at_[hidden]_0 
<br>
/41688/0
<br>
[cluster-srv2.logti.etsmtl.ca:12802] top: openmpi-sessions-AH72000_at_[hidden]_0
<br>
[cluster-srv2.logti.etsmtl.ca:12802] tmp: /tmp
<br>
<p><p>
<br><p>
<p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9003/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9003/PGP.sig">Ceci est une signature &#233;lectronique PGP</a>
</ul>
<!-- attachment="PGP.sig" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9004.php">George Bosilca: "Re: [OMPI users] COMM_ACCEPT/COMM_CONNECT: what BTL will the connected processes use?"</a>
<li><strong>Previous message:</strong> <a href="9002.php">Luis Vitorio Cargnini: "[OMPI users] few Problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9031.php">Jeff Squyres: "Re: [OMPI users] Problems with SSH"</a>
<li><strong>Reply:</strong> <a href="9031.php">Jeff Squyres: "Re: [OMPI users] Problems with SSH"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
