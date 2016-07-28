<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Apr  9 11:24:33 2007" -->
<!-- isoreceived="20070409152433" -->
<!-- sent="Mon, 9 Apr 2007 09:24:15 -0600" -->
<!-- isosent="20070409152415" -->
<!-- name="Brian Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.2 on MacOSX Intel Fails" -->
<!-- id="1C92166F-AD97-49F0-A1D1-806CA09EDFE0_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="9756FD4E-1C0B-4D97-B870-784B6D12F877_at_ucsc.edu" -->
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
<strong>From:</strong> Brian Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-09 11:24:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3046.php">Brian Powell: "Re: [OMPI users] OpenMPI 1.2 on MacOSX Intel Fails"</a>
<li><strong>Previous message:</strong> <a href="3044.php">Nathan Graham: "[OMPI users] OMPI and NPB3.2.1"</a>
<li><strong>In reply to:</strong> <a href="3040.php">Brian Powell: "[OMPI users] OpenMPI 1.2 on MacOSX Intel Fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3046.php">Brian Powell: "Re: [OMPI users] OpenMPI 1.2 on MacOSX Intel Fails"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 7, 2007, at 12:59 AM, Brian Powell wrote:
<br>
<p><span class="quotelev1">&gt; Greetings,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I turn to the assistance of the OpenMPI wizards. I have compiled  
</span><br>
<span class="quotelev1">&gt; v1.2 using gcc and ifort (see the attached config.log) with a  
</span><br>
<span class="quotelev1">&gt; variety of options. The compilation finishes (side note: I had to  
</span><br>
<span class="quotelev1">&gt; define NM otherwise the configure script failed) and installs. I  
</span><br>
<span class="quotelev1">&gt; try to run ompi_info and get the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; A library call unexpectedly failed.  This is a terminal error; please
</span><br>
<span class="quotelev1">&gt; show this message to an Open MPI wizard:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Library call: mca_base_open
</span><br>
<span class="quotelev1">&gt;          Source file: ompi_info.cc
</span><br>
<span class="quotelev1">&gt;   Source line number: 139
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Aborting...
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<p>For reasons I can't duplicate, you're getting an out of memory error  
<br>
when trying to initialize our component system.  I haven't seen this  
<br>
one before, but I noticed a couple of things in the config.log that  
<br>
made me think there might be an underlying problem...
<br>
<p>1) You should never have to specify NM on OS X, even when cross- 
<br>
compiling.  Can you send information on why this is necessary?
<br>
<p>2) This might actually be the answer to #1, but you shouldn't specify  
<br>
--build=i386.  The --build argument takes a complete config.guess- 
<br>
style architecture.  In the case of Mac OS X 10.4.9 on i386, that  
<br>
would be: i386-apple-darwin8.9.1.  But unless you're cross compiling,  
<br>
that argument should not be necessary.
<br>
<p>3) The sysroot stuff is really on necessary if you are cross- 
<br>
compiling.  I wouldn't use it in other cases, as it seems to make  
<br>
things more fragile.  If you're going to specify a sysroot, you need  
<br>
to specify it in CFLAGS, CXXFLAGS, and OBJCFLAGS.  You also should  
<br>
specify the -arch i386 in CXXFLAGS and OBJCFLAGS if you are going to  
<br>
specify it in CFLAGS and FFLAGS, if only for consistency.
<br>
<p>If you could try recompiling without the --build argument and let me  
<br>
know if that fixes the problem, I'd appreciate it.
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3046.php">Brian Powell: "Re: [OMPI users] OpenMPI 1.2 on MacOSX Intel Fails"</a>
<li><strong>Previous message:</strong> <a href="3044.php">Nathan Graham: "[OMPI users] OMPI and NPB3.2.1"</a>
<li><strong>In reply to:</strong> <a href="3040.php">Brian Powell: "[OMPI users] OpenMPI 1.2 on MacOSX Intel Fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3046.php">Brian Powell: "Re: [OMPI users] OpenMPI 1.2 on MacOSX Intel Fails"</a>
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
