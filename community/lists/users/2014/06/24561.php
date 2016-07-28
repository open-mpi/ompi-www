<?
$subject_val = "[OMPI users] Problem with yoda component in oshmem.";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  6 03:56:41 2014" -->
<!-- isoreceived="20140606075641" -->
<!-- sent="Fri, 06 Jun 2014 11:56:39 +0400" -->
<!-- isosent="20140606075639" -->
<!-- name="Timur Ismagilov" -->
<!-- email="tismagilov_at_[hidden]" -->
<!-- subject="[OMPI users] Problem with yoda component in oshmem." -->
<!-- id="1402041399.173324747_at_f95.i.mail.ru" -->
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
<strong>Subject:</strong> [OMPI users] Problem with yoda component in oshmem.<br>
<strong>From:</strong> Timur Ismagilov (<em>tismagilov_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-06 03:56:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24562.php">Mike Dubman: "Re: [OMPI users] Problem with yoda component in oshmem."</a>
<li><strong>Previous message:</strong> <a href="24560.php">Timur Ismagilov: "Re: [OMPI users] [warn] Epoll ADD(1) on fd 0 failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24562.php">Mike Dubman: "Re: [OMPI users] Problem with yoda component in oshmem."</a>
<li><strong>Reply:</strong> <a href="24562.php">Mike Dubman: "Re: [OMPI users] Problem with yoda component in oshmem."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello!
<br>
I am using Open MPI v1.8.1 in
<br>
example program hello_oshmem.cpp.
<br>
When I put &#194;&#160;spml_ikrit_np = 1000 (more than 4) and run task on 4 (2,1) nodes, I get an:
<br>
in out file:&#194;&#160;
<br>
No available spml components were found!
<br>
This means that there are no components of this type installed on your
<br>
system or all the components reported that they could not be used.
<br>
This is a fatal error; your SHMEM process is likely to abort. Check the
<br>
output of the &quot;ompi_info&quot; command and ensure that components of this
<br>
type are available on your system. You may also wish to check the
<br>
value of the &quot;component_path&quot; MCA parameter and ensure that it has at
<br>
least one directory that contains valid MCA components
<br>
in err file:
<br>
[node1-128-31:05405] SPML ikrit cannot be selected
<br>
Regards,
<br>
Timur
<br>
<p><br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24561/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24562.php">Mike Dubman: "Re: [OMPI users] Problem with yoda component in oshmem."</a>
<li><strong>Previous message:</strong> <a href="24560.php">Timur Ismagilov: "Re: [OMPI users] [warn] Epoll ADD(1) on fd 0 failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24562.php">Mike Dubman: "Re: [OMPI users] Problem with yoda component in oshmem."</a>
<li><strong>Reply:</strong> <a href="24562.php">Mike Dubman: "Re: [OMPI users] Problem with yoda component in oshmem."</a>
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
