<?
$subject_val = "[OMPI devel] Broken password recovery functionality of the Trac system";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug  2 10:26:51 2012" -->
<!-- isoreceived="20120802142651" -->
<!-- sent="Thu, 02 Aug 2012 14:26:45 +0000" -->
<!-- isosent="20120802142645" -->
<!-- name="Iliev, Hristo" -->
<!-- email="iliev_at_[hidden]" -->
<!-- subject="[OMPI devel] Broken password recovery functionality of the Trac system" -->
<!-- id="FDAA43115FAF4A4F88865097FC2C3CC9030E7CBE_at_rz-mbx2.win.rz.rwth-aachen.de" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] Broken password recovery functionality of the Trac system<br>
<strong>From:</strong> Iliev, Hristo (<em>iliev_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-02 10:26:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11361.php">Jeff Squyres: "Re: [OMPI devel] Broken password recovery functionality of the Trac system"</a>
<li><strong>Previous message:</strong> <a href="11359.php">Jeff Squyres: "Re: [OMPI devel] MPI_THREAD_MULTIPLE testing on trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11361.php">Jeff Squyres: "Re: [OMPI devel] Broken password recovery functionality of the Trac system"</a>
<li><strong>Reply:</strong> <a href="11361.php">Jeff Squyres: "Re: [OMPI devel] Broken password recovery functionality of the Trac system"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>The password recovery functionality of the Trac system at svn.open-mpi.org 
<br>
appears to be broken. After providing the required user name and e-mail 
<br>
address, one is presented with the following &quot;Oops&quot;:
<br>
<p>&nbsp;&nbsp;Trac detected an internal error:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;UnboundLocalError: local variable 'u_id' referenced before assignment
<br>
<p>&nbsp;&nbsp;There was an internal error in Trac. It is recommended that you notify your 
<br>
local Trac administrator with the information needed to reproduce the issue.
<br>
<p>&nbsp;&nbsp;To that end, you could [Create] a ticket.
<br>
<p>&nbsp;&nbsp;The action that triggered the error was:
<br>
<p>&nbsp;&nbsp;POST: /reset_password
<br>
<p>I am being sent an e-mail containing the new password but I am unable to log 
<br>
in with it. I've tried it several times - 100% reproducible behaviour.
<br>
<p>Kind regards,
<br>
Hristo
<br>
<pre>
--
Hristo Iliev, Ph.D. -- High Performance Computing
RWTH Aachen University, Center for Computing and Communication
Rechen- und Kommunikationszentrum der RWTH Aachen
Seffenter Weg 23,  D 52074  Aachen (Germany)
Tel: +49 241 80 24367 -- Fax/UMS: +49 241 80 624367

</pre>
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11360/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11361.php">Jeff Squyres: "Re: [OMPI devel] Broken password recovery functionality of the Trac system"</a>
<li><strong>Previous message:</strong> <a href="11359.php">Jeff Squyres: "Re: [OMPI devel] MPI_THREAD_MULTIPLE testing on trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11361.php">Jeff Squyres: "Re: [OMPI devel] Broken password recovery functionality of the Trac system"</a>
<li><strong>Reply:</strong> <a href="11361.php">Jeff Squyres: "Re: [OMPI devel] Broken password recovery functionality of the Trac system"</a>
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
