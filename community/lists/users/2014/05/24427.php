<?
$subject_val = "[OMPI users] openmpi configuration error?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 16 17:39:40 2014" -->
<!-- isoreceived="20140516213940" -->
<!-- sent="Fri, 16 May 2014 16:39:19 -0500" -->
<!-- isosent="20140516213919" -->
<!-- name="Ben Lash" -->
<!-- email="bl10_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi configuration error?" -->
<!-- id="CAOiaXW0Zs3J4X19_HTvO3DqQz_L+m4CaY0sbCFzY9DRZZwEJ8w_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] openmpi configuration error?<br>
<strong>From:</strong> Ben Lash (<em>bl10_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-16 17:39:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24428.php">Hjelm, Nathan T: "Re: [OMPI users] Enable PMI build"</a>
<li><strong>Previous message:</strong> <a href="24426.php">Brock Palen: "[OMPI users] Enable PMI build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24430.php">Douglas L Reeder: "Re: [OMPI users] openmpi configuration error?"</a>
<li><strong>Reply:</strong> <a href="24430.php">Douglas L Reeder: "Re: [OMPI users] openmpi configuration error?"</a>
<li><strong>Reply:</strong> <a href="24435.php">Gus Correa: "Re: [OMPI users] openmpi configuration error?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My cluster has just upgraded to a new version of MPI, and I'm using an old
<br>
one. It seems that I'm having trouble compiling due to the compiler wrapper
<br>
file moving (full error here: <a href="http://pastebin.com/EmwRvCd9">http://pastebin.com/EmwRvCd9</a>)
<br>
&quot;Cannot open configuration file
<br>
/opt/apps/openmpi/1.4.4-intel/share/openmpi/mpif90-wrapper-data.txt&quot;
<br>
<p>I've found the file on the cluster at
<br>
&nbsp;/opt/apps/openmpi/retired/1.4.4-intel/share/openmpi/mpif90-wrapper-data.txt
<br>
How do I tell the old mpi wrapper where this file is?
<br>
I've already corrected one link to mpich -&gt;
<br>
/opt/apps/openmpi/retired/1.4.4-intel/,
<br>
which is in the software I'm trying to recompile's lib folder
<br>
(/home/bl10/CMAQv5.0.1/lib/x86_64/ifort). Thanks for any ideas. I also
<br>
tried changing $pkgdatadir based on what I read here:
<br>
<a href="http://www.open-mpi.org/faq/?category=mpi-apps#default-wrapper-compiler-flags">http://www.open-mpi.org/faq/?category=mpi-apps#default-wrapper-compiler-flags</a>
<br>
<p>Thanks.
<br>
<p>--Ben L
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24427/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24428.php">Hjelm, Nathan T: "Re: [OMPI users] Enable PMI build"</a>
<li><strong>Previous message:</strong> <a href="24426.php">Brock Palen: "[OMPI users] Enable PMI build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24430.php">Douglas L Reeder: "Re: [OMPI users] openmpi configuration error?"</a>
<li><strong>Reply:</strong> <a href="24430.php">Douglas L Reeder: "Re: [OMPI users] openmpi configuration error?"</a>
<li><strong>Reply:</strong> <a href="24435.php">Gus Correa: "Re: [OMPI users] openmpi configuration error?"</a>
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
