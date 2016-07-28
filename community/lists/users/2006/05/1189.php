<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue May  2 02:10:51 2006" -->
<!-- isoreceived="20060502061051" -->
<!-- sent="Mon, 01 May 2006 10:51:10 -0400" -->
<!-- isosent="20060501145110" -->
<!-- name="Rolf Vandevaart" -->
<!-- email="Rolf.Vandevaart_at_[hidden]" -->
<!-- subject="[OMPI users] tcp and sm btl parameters" -->
<!-- id="4456205E.7090609_at_Sun.COM" -->
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
<strong>From:</strong> Rolf Vandevaart (<em>Rolf.Vandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-01 10:51:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1190.php">Ali Soleimani: "[OMPI users] OpenMPI TCP no-route-to-host error"</a>
<li><strong>Previous message:</strong> <a href="1188.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] C++ problem with ./configure using Intel version 9.0"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi:
<br>
I am trying to run some performance tests and I want to adjust some of the
<br>
tcp and sm btl parameters.  However, I have had difficulty finding any good
<br>
documentation on them.   I am assuming my best bet is to look through the
<br>
code, but I thought I would see if there is anything I missed.  The ones
<br>
I am especially interested in are:
<br>
<p>--mca btl_tcp_eager_limit
<br>
--mca btl_sm_eager_limit
<br>
<p>Also, I have run into problems with settings I give the 
<br>
btl_tcp_eager_limit (but
<br>
this also be my lack of current understanding)
<br>
For example:
<br>
<p>&nbsp;burl-ct-v20z-1 97 =&gt;mpirun -np 2 --mca pls_rsh_agent rsh --mca 
<br>
btl_tcp_eager_limit 500000 --mca btl_tcp_sndbuf 32768 --mca 
<br>
btl_tcp_rcvbuf 32768 --mca btl_sm_eager_limit 4000000 --host 
<br>
burl-ct-v20z-1,burl-ct-v20z-0 p_to_p
<br>
# Test: p_to_p
<br>
# Mon May  1 09:50:33 2006
<br>
#     SIZE   TIME (us)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0      66.871
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1      62.838
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2      62.879
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4      62.886
<br>
[..snip..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;458752    5344.343
<br>
Signal:11 info.si_errno:0(Error 0) si_code:1(SEGV_MAPERR)
<br>
Failing at addr:18
<br>
*** End of error message ***
<br>
Broken pipe
<br>
&nbsp;burl-ct-v20z-1 98 =&gt;
<br>
<p><p><pre>
-- 
=========================
rolf.vandevaart_at_[hidden]
781-442-3043
=========================
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1190.php">Ali Soleimani: "[OMPI users] OpenMPI TCP no-route-to-host error"</a>
<li><strong>Previous message:</strong> <a href="1188.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] C++ problem with ./configure using Intel version 9.0"</a>
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
