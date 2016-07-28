<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul  4 03:58:45 2006" -->
<!-- isoreceived="20060704075845" -->
<!-- sent="Tue, 04 Jul 2006 17:58:37 +1000" -->
<!-- isosent="20060704075837" -->
<!-- name="Manal Helal" -->
<!-- email="manalorama_at_[hidden]" -->
<!-- subject="[OMPI users] runtime error" -->
<!-- id="1151999917.4956.15.camel_at_localhost" -->
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
<strong>From:</strong> Manal Helal (<em>manalorama_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-04 03:58:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1539.php">kefeng chen: "Re: [OMPI users] error in running openmpi on remote node"</a>
<li><strong>Previous message:</strong> <a href="1537.php">Chengwen Chen: "[OMPI users] error in running openmpi on remote node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1545.php">Brian Barrett: "Re: [OMPI users] runtime error"</a>
<li><strong>Reply:</strong> <a href="1545.php">Brian Barrett: "Re: [OMPI users] runtime error"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/02/15550.php">Marcela Castro León: "Re: [OMPI users] runtime error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>sorry for posting too much, I tried running and I got this error, I
<br>
assume that this is the stack of the calls before the error 
<br>
<p>Signal:11 info.si_errno:0(Success) si_code:2(SEGV_ACCERR)
<br>
Failing at addr:0x8059b73
<br>
[0] func:/usr/local/bin/openmpi/lib/libopal.so.0 [0xb7e76ed0]
<br>
[1] func:[0xffffe440]
<br>
[2] func:/lib/tls/i686/cmov/libc.so.6(_IO_vfprintf+0x34b1) [0xb7d283a1]
<br>
[3] func:/lib/tls/i686/cmov/libc.so.6(vsprintf+0x8b) [0xb7d4041b]
<br>
[4] func:/lib/tls/i686/cmov/libc.so.6(sprintf+0x2b) [0xb7d2d76b]
<br>
[5] func:./moaDist(mprintf+0x4a) [0x8056e96]
<br>
[6] func:./moaDist(processArguments+0x90c) [0x804d60c]
<br>
[7] func:./moaDist(main+0x197) [0x804aa4b]
<br>
[8] func:/lib/tls/i686/cmov/libc.so.6(__libc_start_main+0xd2)
<br>
[0xb7cfeea2]
<br>
[9] func:./moaDist [0x804a079]
<br>
*** End of error message ***
<br>
<p><p>I am not sure if its an IO error; I tried on the web site to search the
<br>
mailing archives, but it takes me to google search, and I am not sure if
<br>
there is any documentation to understand the error messages, 
<br>
<p>Thanks again, 
<br>
<p>Manal
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1539.php">kefeng chen: "Re: [OMPI users] error in running openmpi on remote node"</a>
<li><strong>Previous message:</strong> <a href="1537.php">Chengwen Chen: "[OMPI users] error in running openmpi on remote node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1545.php">Brian Barrett: "Re: [OMPI users] runtime error"</a>
<li><strong>Reply:</strong> <a href="1545.php">Brian Barrett: "Re: [OMPI users] runtime error"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/02/15550.php">Marcela Castro León: "Re: [OMPI users] runtime error"</a>
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
