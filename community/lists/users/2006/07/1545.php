<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul  4 10:13:12 2006" -->
<!-- isoreceived="20060704141312" -->
<!-- sent="Tue, 4 Jul 2006 08:12:39 -0600" -->
<!-- isosent="20060704141239" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] runtime error" -->
<!-- id="BBCA5636-016A-4D7E-96E5-046331974002_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1151999917.4956.15.camel_at_localhost" -->
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
<strong>Date:</strong> 2006-07-04 10:12:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1546.php">George Bosilca: "Re: [OMPI users] Where can I get mpi api reference"</a>
<li><strong>Previous message:</strong> <a href="1544.php">Brian Barrett: "Re: [OMPI users] error in running openmpi on remote node"</a>
<li><strong>In reply to:</strong> <a href="1538.php">Manal Helal: "[OMPI users] runtime error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/02/15550.php">Marcela Castro León: "Re: [OMPI users] runtime error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 4, 2006, at 1:58 AM, Manal Helal wrote:
<br>
<p><span class="quotelev1">&gt; sorry for posting too much, I tried running and I got this error, I
</span><br>
<span class="quotelev1">&gt; assume that this is the stack of the calls before the error
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Signal:11 info.si_errno:0(Success) si_code:2(SEGV_ACCERR)
</span><br>
<span class="quotelev1">&gt; Failing at addr:0x8059b73
</span><br>
<span class="quotelev1">&gt; [0] func:/usr/local/bin/openmpi/lib/libopal.so.0 [0xb7e76ed0]
</span><br>
<span class="quotelev1">&gt; [1] func:[0xffffe440]
</span><br>
<span class="quotelev1">&gt; [2] func:/lib/tls/i686/cmov/libc.so.6(_IO_vfprintf+0x34b1)  
</span><br>
<span class="quotelev1">&gt; [0xb7d283a1]
</span><br>
<span class="quotelev1">&gt; [3] func:/lib/tls/i686/cmov/libc.so.6(vsprintf+0x8b) [0xb7d4041b]
</span><br>
<span class="quotelev1">&gt; [4] func:/lib/tls/i686/cmov/libc.so.6(sprintf+0x2b) [0xb7d2d76b]
</span><br>
<span class="quotelev1">&gt; [5] func:./moaDist(mprintf+0x4a) [0x8056e96]
</span><br>
<span class="quotelev1">&gt; [6] func:./moaDist(processArguments+0x90c) [0x804d60c]
</span><br>
<span class="quotelev1">&gt; [7] func:./moaDist(main+0x197) [0x804aa4b]
</span><br>
<span class="quotelev1">&gt; [8] func:/lib/tls/i686/cmov/libc.so.6(__libc_start_main+0xd2)
</span><br>
<span class="quotelev1">&gt; [0xb7cfeea2]
</span><br>
<span class="quotelev1">&gt; [9] func:./moaDist [0x804a079]
</span><br>
<span class="quotelev1">&gt; *** End of error message ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am not sure if its an IO error; I tried on the web site to search  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; mailing archives, but it takes me to google search, and I am not  
</span><br>
<span class="quotelev1">&gt; sure if
</span><br>
<span class="quotelev1">&gt; there is any documentation to understand the error messages,
</span><br>
<p>The error is that the application caused a segmentation fault.  From  
<br>
the stack trace, it appears that the error occurred within the  
<br>
internals of sprintf, called from the mprintf function in your  
<br>
application.  This doesn't look like an Open MPI error, but something  
<br>
wrong with the application.  One common issue when sprintf is  
<br>
involved is not having a big enough buffer for the output string.   
<br>
I'd recommend running your application under a debugger or under a  
<br>
memory checking debugger like Valgrind.  That should help find the  
<br>
problem.
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
<li><strong>Next message:</strong> <a href="1546.php">George Bosilca: "Re: [OMPI users] Where can I get mpi api reference"</a>
<li><strong>Previous message:</strong> <a href="1544.php">Brian Barrett: "Re: [OMPI users] error in running openmpi on remote node"</a>
<li><strong>In reply to:</strong> <a href="1538.php">Manal Helal: "[OMPI users] runtime error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/02/15550.php">Marcela Castro León: "Re: [OMPI users] runtime error"</a>
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
