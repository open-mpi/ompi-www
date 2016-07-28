<?
$subject_val = "Re: [OMPI users] Problem compiling OpenMPI on Ubuntu 11.04";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 19 17:48:58 2011" -->
<!-- isoreceived="20110419214858" -->
<!-- sent="Tue, 19 Apr 2011 14:48:53 -0700" -->
<!-- isosent="20110419214853" -->
<!-- name="Sergiy Bubin" -->
<!-- email="sergb77_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem compiling OpenMPI on Ubuntu 11.04" -->
<!-- id="COL110-W280559D4E9AC4840730A07AE900_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4DADF8B5.7080900_at_aol.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem compiling OpenMPI on Ubuntu 11.04<br>
<strong>From:</strong> Sergiy Bubin (<em>sergb77_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-19 17:48:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16293.php">mohd naseem: "Re: [OMPI users] mpirun unsuccessful when run across multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="16291.php">Sergiy Bubin: "Re: [OMPI users] Problem compiling OpenMPI on Ubuntu 11.04"</a>
<li><strong>In reply to:</strong> <a href="16290.php">Tim Prince: "Re: [OMPI users] Problem compiling OpenMPI on Ubuntu 11.04"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16283.php">Jeff Squyres: "Re: [OMPI users] Problem compiling OpenMPI on Ubuntu 11.04"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This works too. It is probably a better solution. Thank you very much!
<br>
Sergiy
<br>
<p><span class="quotelev1">&gt; Date: Tue, 19 Apr 2011 14:03:49 -0700
</span><br>
<span class="quotelev1">&gt; From: n8tm_at_[hidden]
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Problem compiling OpenMPI on Ubuntu 11.04
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   On 04/19/2011 01:24 PM, Sergiy Bubin wrote:
</span><br>
<span class="quotelev2">&gt; &gt; /usr/include/c++/4.5/iomanip(64): error: expected an expression
</span><br>
<span class="quotelev2">&gt; &gt;      { return { __mask }; }
</span><br>
<span class="quotelev2">&gt; &gt;               ^
</span><br>
<span class="quotelev2">&gt; &gt; /usr/include/c++/4.5/iomanip(94): error: expected an expression
</span><br>
<span class="quotelev2">&gt; &gt;      { return { __mask }; }
</span><br>
<span class="quotelev2">&gt; &gt;               ^
</span><br>
<span class="quotelev2">&gt; &gt; /usr/include/c++/4.5/iomanip(125): error: expected an expression
</span><br>
<span class="quotelev2">&gt; &gt;      { return { __base }; }
</span><br>
<span class="quotelev2">&gt; &gt;               ^
</span><br>
<span class="quotelev2">&gt; &gt; /usr/include/c++/4.5/iomanip(193): error: expected an expression
</span><br>
<span class="quotelev2">&gt; &gt;      { return { __n }; }
</span><br>
<span class="quotelev2">&gt; &gt;               ^
</span><br>
<span class="quotelev2">&gt; &gt; /usr/include/c++/4.5/iomanip(223): error: expected an expression
</span><br>
<span class="quotelev2">&gt; &gt;      { return { __n }; }
</span><br>
<span class="quotelev2">&gt; &gt;               ^
</span><br>
<span class="quotelev2">&gt; &gt; /usr/include/c++/4.5/iomanip(163): error: expected an expression
</span><br>
<span class="quotelev2">&gt; &gt;        { return { __c }; }
</span><br>
<span class="quotelev2">&gt; &gt;                 ^
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; If you're using icpc, this seeming incompatibility  between icpc and g++ 
</span><br>
<span class="quotelev1">&gt; 4.5 has been discussed on the icpc forum
</span><br>
<span class="quotelev1">&gt; <a href="http://software.intel.com/en-us/forums/showthread.php?t=78677&amp;wapkw=%28iomanip%29">http://software.intel.com/en-us/forums/showthread.php?t=78677&amp;wapkw=%28iomanip%29</a>
</span><br>
<span class="quotelev1">&gt; where you should see that you must take care to set option -std=c++0x 
</span><br>
<span class="quotelev1">&gt; when using current &lt;iomanip&gt; under icpc, as it is treated as a c++0x 
</span><br>
<span class="quotelev1">&gt; feature.  You might try adding the option to the CXXFLAGS or whatever 
</span><br>
<span class="quotelev1">&gt; they are called in openmpi build (or to the icpc.cfg in your icpc 
</span><br>
<span class="quotelev1">&gt; installation).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Tim Prince
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16293.php">mohd naseem: "Re: [OMPI users] mpirun unsuccessful when run across multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="16291.php">Sergiy Bubin: "Re: [OMPI users] Problem compiling OpenMPI on Ubuntu 11.04"</a>
<li><strong>In reply to:</strong> <a href="16290.php">Tim Prince: "Re: [OMPI users] Problem compiling OpenMPI on Ubuntu 11.04"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16283.php">Jeff Squyres: "Re: [OMPI users] Problem compiling OpenMPI on Ubuntu 11.04"</a>
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
