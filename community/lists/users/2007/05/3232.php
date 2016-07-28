<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu May 10 03:57:53 2007" -->
<!-- isoreceived="20070510075753" -->
<!-- sent="Thu, 10 May 2007 09:57:30 +0200" -->
<!-- isosent="20070510075730" -->
<!-- name="Laurent Nguyen" -->
<!-- email="laurent.nguyen_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI 1.2.1: cannot install on IBM SP4" -->
<!-- id="4642D06A.70305_at_idris.fr" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Laurent Nguyen (<em>laurent.nguyen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-10 03:57:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3233.php">Terry Frankcombe: "Re: [OMPI users] Newbie question. Please help."</a>
<li><strong>Previous message:</strong> <a href="3231.php">Mike Tsai: "[OMPI users] OMPI and OSU bandwidth benchmark"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3234.php">Tim Prins: "Re: [OMPI users] OpenMPI 1.2.1: cannot install on IBM SP4"</a>
<li><strong>Reply:</strong> <a href="3234.php">Tim Prins: "Re: [OMPI users] OpenMPI 1.2.1: cannot install on IBM SP4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I tried to install OpenMPI 1.2 but I saw there some problems when 
<br>
compiling files with POE. When OpenMPI 1.2.1 was released, I saw in the 
<br>
bug fixes that this problem was fixed. Then I tried, but it still 
<br>
doesn't work. The problem comes from orte/mca/pls/poe/pls_poe_module.c. 
<br>
A static function &quot;static int pls_poe_cancel_operation(void);&quot; is 
<br>
declared but not defined in the files. I don't know if my configuration 
<br>
make it bug.
<br>
<p>So, if someone achieved to install OpenMPI 1.2.1 on IBM, I would like to 
<br>
have some advices.
<br>
<p>Thank you for your help,
<br>
<p>PS: I attached some output files of my installation
<br>
<p><p><pre>
-- 
**************************************
NGUYEN Anh-Khai Laurent
Equipe Support Utilisateur
Email    :    laurent.nguyen_at_[hidden]
T&#233;l      :    01.69.35.85.66
Adresse  :    IDRIS - Institut du D&#233;veloppement et des Ressources en
               Informatique Scientifique
               CNRS
               Batiment 506
               BP 167
               F - 91403 ORSAY Cedex
Site Web :    <a href="http://www.idris.fr">http://www.idris.fr</a>
**************************************

</pre>
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3232/files_out.tar.gz">files_out.tar.gz</a>
</ul>
<!-- attachment="files_out.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3233.php">Terry Frankcombe: "Re: [OMPI users] Newbie question. Please help."</a>
<li><strong>Previous message:</strong> <a href="3231.php">Mike Tsai: "[OMPI users] OMPI and OSU bandwidth benchmark"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3234.php">Tim Prins: "Re: [OMPI users] OpenMPI 1.2.1: cannot install on IBM SP4"</a>
<li><strong>Reply:</strong> <a href="3234.php">Tim Prins: "Re: [OMPI users] OpenMPI 1.2.1: cannot install on IBM SP4"</a>
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
