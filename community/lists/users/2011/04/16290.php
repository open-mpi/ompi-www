<?
$subject_val = "Re: [OMPI users] Problem compiling OpenMPI on Ubuntu 11.04";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 19 17:04:05 2011" -->
<!-- isoreceived="20110419210405" -->
<!-- sent="Tue, 19 Apr 2011 14:03:49 -0700" -->
<!-- isosent="20110419210349" -->
<!-- name="Tim Prince" -->
<!-- email="n8tm_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem compiling OpenMPI on Ubuntu 11.04" -->
<!-- id="4DADF8B5.7080900_at_aol.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="COL110-W523587A19B412454DB9EB1AE900_at_phx.gbl" -->
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
<strong>From:</strong> Tim Prince (<em>n8tm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-19 17:03:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16291.php">Sergiy Bubin: "Re: [OMPI users] Problem compiling OpenMPI on Ubuntu 11.04"</a>
<li><strong>Previous message:</strong> <a href="16289.php">Ralph Castain: "Re: [OMPI users] Problem compiling OpenMPI on Ubuntu 11.04"</a>
<li><strong>In reply to:</strong> <a href="16288.php">Sergiy Bubin: "Re: [OMPI users] Problem compiling OpenMPI on Ubuntu 11.04"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16292.php">Sergiy Bubin: "Re: [OMPI users] Problem compiling OpenMPI on Ubuntu 11.04"</a>
<li><strong>Reply:</strong> <a href="16292.php">Sergiy Bubin: "Re: [OMPI users] Problem compiling OpenMPI on Ubuntu 11.04"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;On 04/19/2011 01:24 PM, Sergiy Bubin wrote:
<br>
<span class="quotelev1">&gt; /usr/include/c++/4.5/iomanip(64): error: expected an expression
</span><br>
<span class="quotelev1">&gt;      { return { __mask }; }
</span><br>
<span class="quotelev1">&gt;               ^
</span><br>
<span class="quotelev1">&gt; /usr/include/c++/4.5/iomanip(94): error: expected an expression
</span><br>
<span class="quotelev1">&gt;      { return { __mask }; }
</span><br>
<span class="quotelev1">&gt;               ^
</span><br>
<span class="quotelev1">&gt; /usr/include/c++/4.5/iomanip(125): error: expected an expression
</span><br>
<span class="quotelev1">&gt;      { return { __base }; }
</span><br>
<span class="quotelev1">&gt;               ^
</span><br>
<span class="quotelev1">&gt; /usr/include/c++/4.5/iomanip(193): error: expected an expression
</span><br>
<span class="quotelev1">&gt;      { return { __n }; }
</span><br>
<span class="quotelev1">&gt;               ^
</span><br>
<span class="quotelev1">&gt; /usr/include/c++/4.5/iomanip(223): error: expected an expression
</span><br>
<span class="quotelev1">&gt;      { return { __n }; }
</span><br>
<span class="quotelev1">&gt;               ^
</span><br>
<span class="quotelev1">&gt; /usr/include/c++/4.5/iomanip(163): error: expected an expression
</span><br>
<span class="quotelev1">&gt;        { return { __c }; }
</span><br>
<span class="quotelev1">&gt;                 ^
</span><br>
<span class="quotelev1">&gt;
</span><br>
If you're using icpc, this seeming incompatibility  between icpc and g++ 
<br>
4.5 has been discussed on the icpc forum
<br>
<a href="http://software.intel.com/en-us/forums/showthread.php?t=78677&amp;wapkw=%28iomanip%29">http://software.intel.com/en-us/forums/showthread.php?t=78677&amp;wapkw=%28iomanip%29</a>
<br>
where you should see that you must take care to set option -std=c++0x 
<br>
when using current &lt;iomanip&gt; under icpc, as it is treated as a c++0x 
<br>
feature.  You might try adding the option to the CXXFLAGS or whatever 
<br>
they are called in openmpi build (or to the icpc.cfg in your icpc 
<br>
installation).
<br>
<p><pre>
-- 
Tim Prince
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16291.php">Sergiy Bubin: "Re: [OMPI users] Problem compiling OpenMPI on Ubuntu 11.04"</a>
<li><strong>Previous message:</strong> <a href="16289.php">Ralph Castain: "Re: [OMPI users] Problem compiling OpenMPI on Ubuntu 11.04"</a>
<li><strong>In reply to:</strong> <a href="16288.php">Sergiy Bubin: "Re: [OMPI users] Problem compiling OpenMPI on Ubuntu 11.04"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16292.php">Sergiy Bubin: "Re: [OMPI users] Problem compiling OpenMPI on Ubuntu 11.04"</a>
<li><strong>Reply:</strong> <a href="16292.php">Sergiy Bubin: "Re: [OMPI users] Problem compiling OpenMPI on Ubuntu 11.04"</a>
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
