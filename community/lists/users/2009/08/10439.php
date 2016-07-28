<?
$subject_val = "Re: [OMPI users] Problem with linking on OS X";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 19 15:24:19 2009" -->
<!-- isoreceived="20090819192419" -->
<!-- sent="Wed, 19 Aug 2009 21:24:09 +0200" -->
<!-- isosent="20090819192409" -->
<!-- name="tomek" -->
<!-- email="t.koziara_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with linking on OS X" -->
<!-- id="0ED54CDC-1723-43EF-9A4D-135B69FCC6C8_at_gmail.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="846B5410-F1F7-45FF-9B36-897E6F8ED401_at_uvic.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with linking on OS X<br>
<strong>From:</strong> tomek (<em>t.koziara_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-19 15:24:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10440.php">Allen Barnett: "Re: [OMPI users] OpenMPI 1.3 Infiniband Hang"</a>
<li><strong>Previous message:</strong> <a href="10438.php">Jody Klymak: "Re: [OMPI users] Problem with linking on OS X"</a>
<li><strong>In reply to:</strong> <a href="10438.php">Jody Klymak: "Re: [OMPI users] Problem with linking on OS X"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10441.php">tomek: "Re: [OMPI users] Problem with linking on OS X"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jody
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What is the result of &quot;which mpicc&quot; (or whatever you are using for  
</span><br>
<span class="quotelev1">&gt; your compiling/linking?  I'm pretty sure that's where the library  
</span><br>
<span class="quotelev1">&gt; paths get set, and if you are calling /usr/bin/mpicc you will get  
</span><br>
<span class="quotelev1">&gt; the wrong library paths in the executable.
</span><br>
<p>Here you are:
<br>
<p>$ which mpicc
<br>
/opt/openmpi/bin/mpicc
<br>
<p>While:
<br>
<p>$ otool -L solfec-mpi
<br>
solfec-mpi:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/usr/lib/libSystem.B.dylib (compatibility version 1.0.0, current  
<br>
version 111.1.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/System/Library/Frameworks/Accelerate.framework/Versions/A/Frameworks/ 
<br>
vecLib.framework/Versions/A/libBLAS.dylib (compatibility version  
<br>
1.0.0, current version 218.0.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/System/Library/Frameworks/Accelerate.framework/Versions/A/Frameworks/ 
<br>
vecLib.framework/Versions/A/libLAPACK.dylib (compatibility version  
<br>
1.0.0, current version 218.0.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/System/Library/Frameworks/Python.framework/Versions/2.5/Python  
<br>
(compatibility version 2.5.0, current version 2.5.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/usr//lib/libmpi.0.dylib (compatibility version 1.0.0, current  
<br>
version 1.0.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/usr//lib/libopen-rte.0.dylib (compatibility version 1.0.0, current  
<br>
version 1.0.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/usr//lib/libopen-pal.0.dylib (compatibility version 1.0.0, current  
<br>
version 1.0.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/usr/lib/libutil.dylib (compatibility version 1.0.0, current version  
<br>
1.0.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/usr/lib/libgcc_s.1.dylib (compatibility version 1.0.0, current  
<br>
version 1.0.0)
<br>
<p><span class="quotelev2">&gt;&gt; 4. hand compilation with cc -L/opt/openmpi/lib -lmpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Did 4 work?
</span><br>
<p>No, it didn't.
<br>
<p>Thanks
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10439/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10440.php">Allen Barnett: "Re: [OMPI users] OpenMPI 1.3 Infiniband Hang"</a>
<li><strong>Previous message:</strong> <a href="10438.php">Jody Klymak: "Re: [OMPI users] Problem with linking on OS X"</a>
<li><strong>In reply to:</strong> <a href="10438.php">Jody Klymak: "Re: [OMPI users] Problem with linking on OS X"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10441.php">tomek: "Re: [OMPI users] Problem with linking on OS X"</a>
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
