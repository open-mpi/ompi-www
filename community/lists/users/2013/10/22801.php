<?
$subject_val = "Re: [OMPI users] Error";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 18 08:33:46 2013" -->
<!-- isoreceived="20131018123346" -->
<!-- sent="Fri, 18 Oct 2013 12:33:45 +0000" -->
<!-- isosent="20131018123345" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F97C177_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAMG+jN=BdT21-ZMq4aYO6b9ghLFoBtzMTYoLVyURBXCnXufnxw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Error<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-18 08:33:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22802.php">Dave Love: "[OMPI users] debugging performance regressions between versions"</a>
<li><strong>Previous message:</strong> <a href="22800.php">sudhirs_at_[hidden]: "[OMPI users] Error"</a>
<li><strong>In reply to:</strong> <a href="22800.php">sudhirs_at_[hidden]: "[OMPI users] Error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This typically indicates an error in the physical layer of your IB network.  You should run layer 0 diagnostics and look for bad cables, bad HCAs, etc.
<br>
<p><p>On Oct 18, 2013, at 1:49 AM, &quot;sudhirs@&quot; &lt;sudhirchem87_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear open-mpi user,
</span><br>
<span class="quotelev1">&gt; I am running a CPMD calculation in parallel. I got the following error and job got killed. Below I have given the error message. What is this error and how to fix it ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [[12065,1],23][btl_openib_component.c:2948:handle_wc] from compute-0-0.local to: compute-0-7 error polling LP CQ with status RETRY EXCEEDED ERROR status number 12 for wr_id 396116864 opcode 0  vendor error 129 qp_idx 1
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; The InfiniBand retry count between two MPI processes has been
</span><br>
<span class="quotelev1">&gt; exceeded.  &quot;Retry count&quot; is defined in the InfiniBand spec 1.2
</span><br>
<span class="quotelev1">&gt; (section 12.7.38):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     The total number of times that the sender wishes the receiver to
</span><br>
<span class="quotelev1">&gt;     retry timeout, packet sequence, etc. errors before posting a
</span><br>
<span class="quotelev1">&gt;     completion error.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This error typically means that there is something awry within the
</span><br>
<span class="quotelev1">&gt; InfiniBand fabric itself.  You should note the hosts on which this
</span><br>
<span class="quotelev1">&gt; error has occurred; it has been observed that rebooting or removing a
</span><br>
<span class="quotelev1">&gt; particular host from the job can sometimes resolve this issue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Two MCA parameters can be used to control Open MPI's behavior with
</span><br>
<span class="quotelev1">&gt; respect to the retry count:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * btl_openib_ib_retry_count - The number of times the sender will
</span><br>
<span class="quotelev1">&gt;   attempt to retry (defaulted to 7, the maximum value).
</span><br>
<span class="quotelev1">&gt; * btl_openib_ib_timeout - The local ACK timeout parameter (defaulted
</span><br>
<span class="quotelev1">&gt;   to 10).  The actual timeout value used is calculated as:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      4.096 microseconds * (2^btl_openib_ib_timeout)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   See the InfiniBand spec 1.2 (section 12.7.34) for more details.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Below is some information about the host that raised the error and the
</span><br>
<span class="quotelev1">&gt; peer to which it was connected:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Local host:   compute-0-0.local
</span><br>
<span class="quotelev1">&gt;   Local device: mthca0
</span><br>
<span class="quotelev1">&gt;   Peer host:    compute-0-7
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You may need to consult with your system administrator to get this
</span><br>
<span class="quotelev1">&gt; problem fixed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun has exited due to process rank 23 with PID 24240 on
</span><br>
<span class="quotelev1">&gt; node compute-0-0 exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev1">&gt; have caused other processes in the application to be
</span><br>
<span class="quotelev1">&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; forrtl: error (78): process killed (SIGTERM)
</span><br>
<span class="quotelev1">&gt; Image              PC                Routine            Line        Source
</span><br>
<span class="quotelev1">&gt; mca_btl_openib.so  00002AD8CFE0DED0  Unknown               Unknown  Unknown
</span><br>
<span class="quotelev1">&gt; forrtl: error (78): process killed (SIGTERM)
</span><br>
<span class="quotelev1">&gt; Image              PC                Routine            Line        Source
</span><br>
<span class="quotelev1">&gt; mca_btl_sm.so      00002B316684B029  Unknown               Unknown  Unknown
</span><br>
<span class="quotelev1">&gt; libopen-pal.so.0   00002B3162A0FD97  Unknown               Unknown  Unknown
</span><br>
<span class="quotelev1">&gt; libmpi.so.0        00002B31625008B6  Unknown               Unknown  Unknown
</span><br>
<span class="quotelev1">&gt; mca_coll_tuned.so  00002B3167902A3E  Unknown               Unknown  Unknown
</span><br>
<span class="quotelev1">&gt; mca_coll_tuned.so  00002B31678FF6F5  Unknown               Unknown  Unknown
</span><br>
<span class="quotelev1">&gt; libmpi.so.0        00002B31625178C6  Unknown               Unknown  Unknown
</span><br>
<span class="quotelev1">&gt; libmpi_f77.so.0    00002B31622B7725  Unknown               Unknown  Unknown
</span><br>
<span class="quotelev1">&gt; cpmd.x             0000000000808017  Unknown               Unknown  Unknown
</span><br>
<span class="quotelev1">&gt; cpmd.x             0000000000805AF8  Unknown               Unknown  Unknown
</span><br>
<span class="quotelev1">&gt; cpmd.x             000000000050C49D  Unknown               Unknown  Unknown
</span><br>
<span class="quotelev1">&gt; cpmd.x             00000000005B6FC8  Unknown               Unknown  Unknown
</span><br>
<span class="quotelev1">&gt; cpmd.x             000000000051D5DE  Unknown               Unknown  Unknown
</span><br>
<span class="quotelev1">&gt; cpmd.x             00000000005B3557  Unknown               Unknown  Unknown
</span><br>
<span class="quotelev1">&gt; cpmd.x             000000000095817C  Unknown               Unknown  Unknown
</span><br>
<span class="quotelev1">&gt; cpmd.x             0000000000959557  Unknown               Unknown  Unknown
</span><br>
<span class="quotelev1">&gt; cpmd.x             0000000000657E07  Unknown               Unknown  Unknown
</span><br>
<span class="quotelev1">&gt; cpmd.x             000000000046F2D1  Unknown               Unknown  Unknown
</span><br>
<span class="quotelev1">&gt; cpmd.x             000000000046EF6C  Unknown               Unknown  Unknown
</span><br>
<span class="quotelev1">&gt; libc.so.6          0000003F34E1D974  Unknown               Unknown  Unknown
</span><br>
<span class="quotelev1">&gt; cpmd.x             000000000046EE79  Unknown               Unknown  Unknown
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanking you
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Sudhir Kumar Sahoo
</span><br>
<span class="quotelev1">&gt; Ph.D Scholar
</span><br>
<span class="quotelev1">&gt; Dept. Of Chemistry
</span><br>
<span class="quotelev1">&gt; IIT Kanpur-208016
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22802.php">Dave Love: "[OMPI users] debugging performance regressions between versions"</a>
<li><strong>Previous message:</strong> <a href="22800.php">sudhirs_at_[hidden]: "[OMPI users] Error"</a>
<li><strong>In reply to:</strong> <a href="22800.php">sudhirs_at_[hidden]: "[OMPI users] Error"</a>
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
