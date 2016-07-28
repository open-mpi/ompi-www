<?
$subject_val = "[OMPI users] Problem with linking on OS X";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 19 13:57:30 2009" -->
<!-- isoreceived="20090819175730" -->
<!-- sent="Wed, 19 Aug 2009 19:57:22 +0200" -->
<!-- isosent="20090819175722" -->
<!-- name="tomek" -->
<!-- email="t.koziara_at_[hidden]" -->
<!-- subject="[OMPI users] Problem with linking on OS X" -->
<!-- id="791FC700-9A96-41EC-9F3F-6B0166C81B42_at_gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Problem with linking on OS X<br>
<strong>From:</strong> tomek (<em>t.koziara_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-19 13:57:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10438.php">Jody Klymak: "Re: [OMPI users] Problem with linking on OS X"</a>
<li><strong>Previous message:</strong> <a href="10436.php">Eugene Loh: "Re: [OMPI users] MPI loop problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10438.php">Jody Klymak: "Re: [OMPI users] Problem with linking on OS X"</a>
<li><strong>Reply:</strong> <a href="10438.php">Jody Klymak: "Re: [OMPI users] Problem with linking on OS X"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>I spent some time today trying to install OpenMPI 1.3.3 on OS X  
<br>
10.5.8. I need to used threading and asynchronous progress, hence the  
<br>
pre-installed OpenMPI is not sufficient.
<br>
<p>Anyhow - whatever I did (and I tried many things) - my applications is  
<br>
getting linked against the default /usr/lib/  OpenMPI, rather than  
<br>
against /opt/openmpi/lib version.
<br>
<p>I installed the software using those instructions:
<br>
<p><a href="http://www.open-mpi.org/faq/?category=osx#osx-bundled-ompi">http://www.open-mpi.org/faq/?category=osx#osx-bundled-ompi</a>
<br>
<p>and, when it didn't work properly, I tired:
<br>
<p>1. Using DYLD_LIBRARY_PATH
<br>
2. passing some ./configure --with-wrapper-ldflags=&quot;-L/opt/openmpi/lib&quot;
<br>
3. passing some ./configure --with-wrapper-ldflags=&quot;-rpath /opt/ 
<br>
openmpi/lib&quot;
<br>
4. hand compilation with cc -L/opt/openmpi/lib -lmpi
<br>
<p>2 and 3 did not work (ld error=22)
<br>
<p>With 1 and 2 my code still gets linked with /usr/lib/libmpi...
<br>
<p>Note, that the /opt/openmpi/bin path is properly set and ompi_info  
<br>
does outputs the right info.
<br>
<p>Any hints will be appreciated
<br>
Tomek 
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10437/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10438.php">Jody Klymak: "Re: [OMPI users] Problem with linking on OS X"</a>
<li><strong>Previous message:</strong> <a href="10436.php">Eugene Loh: "Re: [OMPI users] MPI loop problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10438.php">Jody Klymak: "Re: [OMPI users] Problem with linking on OS X"</a>
<li><strong>Reply:</strong> <a href="10438.php">Jody Klymak: "Re: [OMPI users] Problem with linking on OS X"</a>
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
