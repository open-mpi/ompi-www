<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Sep 17 10:34:37 2007" -->
<!-- isoreceived="20070917143437" -->
<!-- sent="Mon, 17 Sep 2007 08:33:21 -0600" -->
<!-- isosent="20070917143321" -->
<!-- name="Brian Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Configure Error Mac OS X with Intel Compilers" -->
<!-- id="E378FF13-FD05-4EEB-B86D-F40ADB538B5B_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="3EE2F9BA602E4E4996B7FF325570F1392937D6_at_ES23SNLNT.srn.sandia.gov" -->
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
<strong>Date:</strong> 2007-09-17 10:33:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4027.php">Brian Barrett: "Re: [OMPI users] another mpirun + xgrid question"</a>
<li><strong>Previous message:</strong> <a href="4025.php">attitude_man_at_[hidden]: "[OMPI users] [SPAM:### 81%] simulations for SLES 10"</a>
<li><strong>In reply to:</strong> <a href="3985.php">Foster, John T: "[OMPI users] Configure Error Mac OS X with Intel Compilers"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 9, 2007, at 10:28 AM, Foster, John T wrote:
<br>
<span class="quotelev1">&gt; I'm having trouble configuring Open-MPI 1.2.4 with the Intel C++  
</span><br>
<span class="quotelev1">&gt; Compiler v. 10.  I have Mac OS X 10.4.10.  I have succesfully  
</span><br>
<span class="quotelev1">&gt; configured and built OMPI with the gcc compilers and a combination  
</span><br>
<span class="quotelev1">&gt; of gcc/ifort.  When I try to configure with icc/icpc it gives me an  
</span><br>
<span class="quotelev1">&gt; error saying I have a bad C++ compiler and it failed to compile a  
</span><br>
<span class="quotelev1">&gt; simple program.  I have compiled many simple test programs with  
</span><br>
<span class="quotelev1">&gt; icpc with no error.  The config.log and output of configure  
</span><br>
<span class="quotelev1">&gt; (config.out) files are attached.  Thanks in advance for any help.
</span><br>
<p>I think there is actually something wrong with your environment.   
<br>
Here's the error from icpc for the test that's failing:
<br>
<p>configure:21042: icpc -o conftest -DNDEBUG    conftest.cc  &gt;&amp;5
<br>
/usr/local/include/c++/4.2.0/ext/atomicity.h(51): error: identifier  
<br>
&quot;__sync_fetc
<br>
h_and_add&quot; is undefined
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{ return __sync_fetch_and_add(__mem, __val); }
<br>
<p>Do you have a GCC 4.2 install in /usr/local?  It looks like that  
<br>
might be causing problems in this case.  Based on the tests run, it  
<br>
appears that icpc is able to compile C++ code as long as the STL  
<br>
headers aren't included.  The test that failed was a fairly trivial one:
<br>
<p>#define _GNU_SOURCE 1
<br>
#include &lt;string&gt;
<br>
int
<br>
main ()
<br>
{
<br>
std::string foo = &quot;Hello, world&quot;
<br>
&nbsp;&nbsp;&nbsp;;
<br>
&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p><p>Hope this helps,
<br>
<p>Brian
<br>
<p><pre>
-- 
   Brian W. Barrett
   Networking Team, CCS-1
   Los Alamos National Laboratory
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4027.php">Brian Barrett: "Re: [OMPI users] another mpirun + xgrid question"</a>
<li><strong>Previous message:</strong> <a href="4025.php">attitude_man_at_[hidden]: "[OMPI users] [SPAM:### 81%] simulations for SLES 10"</a>
<li><strong>In reply to:</strong> <a href="3985.php">Foster, John T: "[OMPI users] Configure Error Mac OS X with Intel Compilers"</a>
<!-- nextthread="start" -->
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
