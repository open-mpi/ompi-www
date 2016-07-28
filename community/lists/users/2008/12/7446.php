<?
$subject_val = "[OMPI users] MCA parameter";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  8 03:50:02 2008" -->
<!-- isoreceived="20081208085002" -->
<!-- sent="Mon, 8 Dec 2008 08:49:57 +0000 (GMT)" -->
<!-- isosent="20081208084957" -->
<!-- name="Yasmine Yacoub" -->
<!-- email="sikasoka_8_at_[hidden]" -->
<!-- subject="[OMPI users] MCA parameter" -->
<!-- id="477389.55781.qm_at_web28405.mail.ukl.yahoo.com" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] MCA parameter<br>
<strong>From:</strong> Yasmine Yacoub (<em>sikasoka_8_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-08 03:49:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7447.php">Jens: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<li><strong>Previous message:</strong> <a href="7445.php">Barry Rountree: "[OMPI users] How to force eager behavior during Isend?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7452.php">Ralph Castain: "Re: [OMPI users] MCA parameter"</a>
<li><strong>Reply:</strong> <a href="7452.php">Ralph Castain: "Re: [OMPI users] MCA parameter"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Good morning,

I have explain my problem lat time and still I haven't receive any response.
ok, my problem is that after installing pwscf and running one scf example, I got the output but with&#194;&#160;this warning message :
WARNING: There are more than one active ports on host 'stallo-2.local', but the
default subnet GID prefix was detected on more than one of these
ports.&#194;&#160; If these ports are connected to different physical IB
networks, this configuration will fail in Open MPI.&#194;&#160; This version of
Open MPI requires that every physically separate IB subnet that is
used between connected MPI processes must have different subnet ID
values.
&#194;&#160;
Please see this FAQ entry for more details:
&#194;&#160;
&#194;&#160; <a href="http://www.open-mpi.org/faq/?category=openfabrics#ofa-default-subnet-gid">http://www.open-mpi.org/faq/?category=openfabrics#ofa-default-subnet-gid</a>
&#194;&#160;
NOTE: You can turn off this warning by setting the MCA parameter
&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; btl_openib_warn_default_gid_prefix to 0.
&#194;&#160;
So, please how can I turn off this warning? I have already tried to follow the steps indicated in the link above but it doesn't work. what is exactly the command I have to use?
&#194;&#160;
Thanks,


      
<br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7446/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7447.php">Jens: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<li><strong>Previous message:</strong> <a href="7445.php">Barry Rountree: "[OMPI users] How to force eager behavior during Isend?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7452.php">Ralph Castain: "Re: [OMPI users] MCA parameter"</a>
<li><strong>Reply:</strong> <a href="7452.php">Ralph Castain: "Re: [OMPI users] MCA parameter"</a>
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
