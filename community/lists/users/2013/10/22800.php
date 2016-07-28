<?
$subject_val = "[OMPI users] Error";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 18 01:49:28 2013" -->
<!-- isoreceived="20131018054928" -->
<!-- sent="Fri, 18 Oct 2013 11:19:27 +0530" -->
<!-- isosent="20131018054927" -->
<!-- name="sudhirs_at_[hidden]" -->
<!-- email="sudhirs_at_[hidden]" -->
<!-- subject="[OMPI users] Error" -->
<!-- id="CAMG+jN=BdT21-ZMq4aYO6b9ghLFoBtzMTYoLVyURBXCnXufnxw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Error<br>
<strong>From:</strong> <a href="mailto:sudhirs_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Error"><em>sudhirs_at_[hidden]</em></a><br>
<strong>Date:</strong> 2013-10-18 01:49:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22801.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Error"</a>
<li><strong>Previous message:</strong> <a href="22799.php">Jeferson Fs: "[OMPI users] Send a struct with Vector or dynamics arrays"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22801.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Error"</a>
<li><strong>Reply:</strong> <a href="22801.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear open-mpi user,
<br>
I am running a CPMD calculation in parallel. I got the following error and
<br>
job got killed. Below I have given the error message. What is this error
<br>
and how to fix it ?
<br>
<p><p>[[12065,1],23][btl_openib_component.c:2948:handle_wc] from
<br>
compute-0-0.local to: compute-0-7 error polling LP CQ with status RETRY
<br>
EXCEEDED ERROR status number 12 for wr_id 396116864 opcode 0  vendor error
<br>
129 qp_idx 1
<br>
--------------------------------------------------------------------------
<br>
The InfiniBand retry count between two MPI processes has been
<br>
exceeded.  &quot;Retry count&quot; is defined in the InfiniBand spec 1.2
<br>
(section 12.7.38):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;The total number of times that the sender wishes the receiver to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;retry timeout, packet sequence, etc. errors before posting a
<br>
&nbsp;&nbsp;&nbsp;&nbsp;completion error.
<br>
<p>This error typically means that there is something awry within the
<br>
InfiniBand fabric itself.  You should note the hosts on which this
<br>
error has occurred; it has been observed that rebooting or removing a
<br>
particular host from the job can sometimes resolve this issue.
<br>
<p>Two MCA parameters can be used to control Open MPI's behavior with
<br>
respect to the retry count:
<br>
<p>* btl_openib_ib_retry_count - The number of times the sender will
<br>
&nbsp;&nbsp;attempt to retry (defaulted to 7, the maximum value).
<br>
* btl_openib_ib_timeout - The local ACK timeout parameter (defaulted
<br>
&nbsp;&nbsp;to 10).  The actual timeout value used is calculated as:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.096 microseconds * (2^btl_openib_ib_timeout)
<br>
<p>&nbsp;&nbsp;See the InfiniBand spec 1.2 (section 12.7.34) for more details.
<br>
<p>Below is some information about the host that raised the error and the
<br>
peer to which it was connected:
<br>
<p>&nbsp;&nbsp;Local host:   compute-0-0.local
<br>
&nbsp;&nbsp;Local device: mthca0
<br>
&nbsp;&nbsp;Peer host:    compute-0-7
<br>
<p>You may need to consult with your system administrator to get this
<br>
problem fixed.
<br>
<p>--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun has exited due to process rank 23 with PID 24240 on
<br>
node compute-0-0 exiting without calling &quot;finalize&quot;. This may
<br>
have caused other processes in the application to be
<br>
terminated by signals sent by mpirun (as reported here).
<br>
--------------------------------------------------------------------------
<br>
forrtl: error (78): process killed (SIGTERM)
<br>
Image              PC                Routine            Line        Source
<br>
mca_btl_openib.so  00002AD8CFE0DED0  Unknown               Unknown  Unknown
<br>
forrtl: error (78): process killed (SIGTERM)
<br>
Image              PC                Routine            Line        Source
<br>
mca_btl_sm.so      00002B316684B029  Unknown               Unknown  Unknown
<br>
libopen-pal.so.0   00002B3162A0FD97  Unknown               Unknown  Unknown
<br>
libmpi.so.0        00002B31625008B6  Unknown               Unknown  Unknown
<br>
mca_coll_tuned.so  00002B3167902A3E  Unknown               Unknown  Unknown
<br>
mca_coll_tuned.so  00002B31678FF6F5  Unknown               Unknown  Unknown
<br>
libmpi.so.0        00002B31625178C6  Unknown               Unknown  Unknown
<br>
libmpi_f77.so.0    00002B31622B7725  Unknown               Unknown  Unknown
<br>
cpmd.x             0000000000808017  Unknown               Unknown  Unknown
<br>
cpmd.x             0000000000805AF8  Unknown               Unknown  Unknown
<br>
cpmd.x             000000000050C49D  Unknown               Unknown  Unknown
<br>
cpmd.x             00000000005B6FC8  Unknown               Unknown  Unknown
<br>
cpmd.x             000000000051D5DE  Unknown               Unknown  Unknown
<br>
cpmd.x             00000000005B3557  Unknown               Unknown  Unknown
<br>
cpmd.x             000000000095817C  Unknown               Unknown  Unknown
<br>
cpmd.x             0000000000959557  Unknown               Unknown  Unknown
<br>
cpmd.x             0000000000657E07  Unknown               Unknown  Unknown
<br>
cpmd.x             000000000046F2D1  Unknown               Unknown  Unknown
<br>
cpmd.x             000000000046EF6C  Unknown               Unknown  Unknown
<br>
libc.so.6          0000003F34E1D974  Unknown               Unknown  Unknown
<br>
cpmd.x             000000000046EE79  Unknown               Unknown  Unknown
<br>
<p><p>Thanking you
<br>
<pre>
-- 
Sudhir Kumar Sahoo
Ph.D Scholar
Dept. Of Chemistry
IIT Kanpur-208016
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22800/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22801.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Error"</a>
<li><strong>Previous message:</strong> <a href="22799.php">Jeferson Fs: "[OMPI users] Send a struct with Vector or dynamics arrays"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22801.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Error"</a>
<li><strong>Reply:</strong> <a href="22801.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Error"</a>
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
