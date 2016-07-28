<?
$subject_val = "[OMPI users] mpicc link shouldn't add -ldl and -lhwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 15 12:37:26 2012" -->
<!-- isoreceived="20120515163726" -->
<!-- sent="Tue, 15 May 2012 10:37:16 -0600" -->
<!-- isosent="20120515163716" -->
<!-- name="Orion Poplawski" -->
<!-- email="orion_at_[hidden]" -->
<!-- subject="[OMPI users] mpicc link shouldn't add -ldl and -lhwloc" -->
<!-- id="4FB2863C.7070006_at_cora.nwra.com" -->
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
<strong>Subject:</strong> [OMPI users] mpicc link shouldn't add -ldl and -lhwloc<br>
<strong>From:</strong> Orion Poplawski (<em>orion_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-15 12:37:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19280.php">Ricardo Reis: "Re: [OMPI users] MPI-IO puzzlement"</a>
<li><strong>Previous message:</strong> <a href="19278.php">Jeff Squyres: "Re: [OMPI users] Open-MPI 1.6 searches for default hostfile in the wrong directory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19320.php">Orion Poplawski: "Re: [OMPI users] mpicc link shouldn't add -ldl and -lhwloc"</a>
<li><strong>Reply:</strong> <a href="19320.php">Orion Poplawski: "Re: [OMPI users] mpicc link shouldn't add -ldl and -lhwloc"</a>
<li><strong>Reply:</strong> <a href="19324.php">Jeff Squyres: "Re: [OMPI users] mpicc link shouldn't add -ldl and -lhwloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
See <a href="https://bugzilla.redhat.com/show_bug.cgi?id=814798">https://bugzilla.redhat.com/show_bug.cgi?id=814798</a>
<br>
<p>$ mpicc -showme:link
<br>
-pthread -m64 -L/usr/lib64/openmpi/lib -lmpi -ldl -lhwloc
<br>
<p>-ldl and -lhwloc should not be listed.  The user should only link against 
<br>
libraries that they are using directly, namely -lmpi, and they should 
<br>
explicitly add -ldl and -lhwloc if their code directly uses those libraries. 
<br>
There does not appear to be any references to libdl or libhwloc symbols in the 
<br>
openmpi headers which is the other place it could come in.
<br>
<p>configure appears to add them to opal_WRAPPER_EXTRA_LIBS which then makes its
<br>
way into this list.
<br>
<p>This report is with openmpi-1.5.5.  Haven't tested with 1.6, but configure 
<br>
looks to do the same in it.
<br>
<p>Comments?
<br>
<p>&nbsp;&nbsp;- Orion
<br>
<p><pre>
-- 
Orion Poplawski
Technical Manager                     303-415-9701 x222
NWRA, Boulder Office                  FAX: 303-415-9702
3380 Mitchell Lane                       orion_at_[hidden]
Boulder, CO 80301                   <a href="http://www.nwra.com">http://www.nwra.com</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19280.php">Ricardo Reis: "Re: [OMPI users] MPI-IO puzzlement"</a>
<li><strong>Previous message:</strong> <a href="19278.php">Jeff Squyres: "Re: [OMPI users] Open-MPI 1.6 searches for default hostfile in the wrong directory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19320.php">Orion Poplawski: "Re: [OMPI users] mpicc link shouldn't add -ldl and -lhwloc"</a>
<li><strong>Reply:</strong> <a href="19320.php">Orion Poplawski: "Re: [OMPI users] mpicc link shouldn't add -ldl and -lhwloc"</a>
<li><strong>Reply:</strong> <a href="19324.php">Jeff Squyres: "Re: [OMPI users] mpicc link shouldn't add -ldl and -lhwloc"</a>
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
