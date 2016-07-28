<?
$subject_val = "[OMPI users] error while loading shared libraries: libhdf5.so.7:";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  7 05:55:14 2013" -->
<!-- isoreceived="20130207105514" -->
<!-- sent="Thu, 7 Feb 2013 15:55:10 +0500" -->
<!-- isosent="20130207105510" -->
<!-- name="Syed Ahsan Ali" -->
<!-- email="ahsanshah01_at_[hidden]" -->
<!-- subject="[OMPI users] error while loading shared libraries: libhdf5.so.7:" -->
<!-- id="CAMvdAsKoLK6KsRdci-G20uevSxkd9qwD8icU=xDjWYxMCfn53w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] error while loading shared libraries: libhdf5.so.7:<br>
<strong>From:</strong> Syed Ahsan Ali (<em>ahsanshah01_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-07 05:55:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21326.php">John Hearns: "Re: [OMPI users] error while loading shared libraries: libhdf5.so.7:"</a>
<li><strong>Previous message:</strong> <a href="21324.php">Siegmar Gross: "Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21326.php">John Hearns: "Re: [OMPI users] error while loading shared libraries: libhdf5.so.7:"</a>
<li><strong>Reply:</strong> <a href="21326.php">John Hearns: "Re: [OMPI users] error while loading shared libraries: libhdf5.so.7:"</a>
<li><strong>Reply:</strong> <a href="21330.php">Gus Correa: "Re: [OMPI users] error while loading shared libraries: libhdf5.so.7:"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have been running this program successfully before but some copy
<br>
operation from /usr/ directory has caused this error.
<br>
<p>The program runs fine on the cores of the same machine.
<br>
libhdf5.so.7 is also present.
<br>
<p>[pmdtest_at_pmd HadGEM]$ mpirun -np 32 -hostfile hostlist rca.x
<br>
rca.x: error while loading shared libraries: libhdf5.so.7: cannot open
<br>
shared object file: No such file or directory
<br>
<p>Please advise!
<br>
Ahsan
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21325/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21326.php">John Hearns: "Re: [OMPI users] error while loading shared libraries: libhdf5.so.7:"</a>
<li><strong>Previous message:</strong> <a href="21324.php">Siegmar Gross: "Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21326.php">John Hearns: "Re: [OMPI users] error while loading shared libraries: libhdf5.so.7:"</a>
<li><strong>Reply:</strong> <a href="21326.php">John Hearns: "Re: [OMPI users] error while loading shared libraries: libhdf5.so.7:"</a>
<li><strong>Reply:</strong> <a href="21330.php">Gus Correa: "Re: [OMPI users] error while loading shared libraries: libhdf5.so.7:"</a>
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
