<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Apr 14 11:51:48 2006" -->
<!-- isoreceived="20060414155148" -->
<!-- sent="Fri, 14 Apr 2006 09:51:45 -0600" -->
<!-- isosent="20060414155145" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error in configuration for crosscompiler PowerPC" -->
<!-- id="F1119C34-AB5B-4172-9EE2-A79FF4079F6F_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.LNX.4.64.0604121917570.1890_at_rhsvr03.ece.unm.edu" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-14 11:51:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1063.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Incorrect behavior for attributes attached toMPI_COMM_SELF."</a>
<li><strong>Previous message:</strong> <a href="1061.php">Brian Barrett: "Re: [OMPI users] running a job problem"</a>
<li><strong>In reply to:</strong> <a href="1045.php">Jorge Parra: "[OMPI users] Error in configuration for crosscompiler PowerPC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1064.php">Jorge Parra: "Re: [OMPI users] Error in configuration for crosscompiler PowerPC"</a>
<li><strong>Reply:</strong> <a href="1064.php">Jorge Parra: "Re: [OMPI users] Error in configuration for crosscompiler PowerPC"</a>
<li><strong>Reply:</strong> <a href="1087.php">Jorge Parra: "Re: [OMPI users] Error in configuration for crosscompiler PowerPC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 12, 2006, at 7:19 PM, Jorge Parra wrote:
<br>
<p><span class="quotelev1">&gt; I am trying to configure openmpi-1.0.2. However it gives me an  
</span><br>
<span class="quotelev1">&gt; error while running the configuration step. It stops when
</span><br>
<span class="quotelev1">&gt; trying to determine the &quot;aligment of bool&quot;. I attached the outputs  
</span><br>
<span class="quotelev1">&gt; as it is suggested.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The system I am using to build openmpi is an intel P4 running  
</span><br>
<span class="quotelev1">&gt; RedHat Enterprise 3. I am using it to crosscompile for a
</span><br>
<span class="quotelev1">&gt; system running a power pc 405, and montavista linux 3.1 over it.
</span><br>
<p>It appears that this is an issue with our configure tests with more  
<br>
recent versions of GCC and cross-compiling (the error will not occur  
<br>
when not cross compiling).  Fixes have been applied for all the  
<br>
upcoming releases.  You can grab a nightly release from the 1.0  
<br>
branch tomorrow and it should work.  The nightly tarballs can be  
<br>
downloaded from:
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/nightly/v1.0/">http://www.open-mpi.org/nightly/v1.0/</a>
<br>
<p>Releases from the 1.0 series will not properly cross-compile the  
<br>
Fortran bindings - they must explicitly be disabled with --disable- 
<br>
mpi-f77 in order for the configure script to complete.  ROMIO on the  
<br>
1.0 series has also not been tested to make sure it properly cross- 
<br>
compiles.  This has been fixed for the upcoming 1.1 release, although  
<br>
you will have to run an external program on the target platform in  
<br>
order to generate a seed file for some of the data we need in order  
<br>
to cross-compile our Fortran bindings.  We don't have documentation  
<br>
on this just yet, but I can provide you with instructions if you need  
<br>
Fortran bindings.
<br>
<p><p>Hope this helps,
<br>
<p>Brian
<br>
<p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1063.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Incorrect behavior for attributes attached toMPI_COMM_SELF."</a>
<li><strong>Previous message:</strong> <a href="1061.php">Brian Barrett: "Re: [OMPI users] running a job problem"</a>
<li><strong>In reply to:</strong> <a href="1045.php">Jorge Parra: "[OMPI users] Error in configuration for crosscompiler PowerPC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1064.php">Jorge Parra: "Re: [OMPI users] Error in configuration for crosscompiler PowerPC"</a>
<li><strong>Reply:</strong> <a href="1064.php">Jorge Parra: "Re: [OMPI users] Error in configuration for crosscompiler PowerPC"</a>
<li><strong>Reply:</strong> <a href="1087.php">Jorge Parra: "Re: [OMPI users] Error in configuration for crosscompiler PowerPC"</a>
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
