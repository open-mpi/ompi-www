<?
$subject_val = "Re: [OMPI users] Live process migration";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 12 00:58:23 2012" -->
<!-- isoreceived="20121212055823" -->
<!-- sent="Wed, 12 Dec 2012 16:58:18 +1100" -->
<!-- isosent="20121212055818" -->
<!-- name="Ifeanyi" -->
<!-- email="ifeanyeg2012_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Live process migration" -->
<!-- id="CAMxrTy-aR78-LQHEORynnGBQ0DMdL+8CCtzeTwhwDqXvTrm+hQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAOAAPT5FFq7PUFC_L_6SYw1ge7UOrGS5cZP6r48=OOEYhBfTmw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Live process migration<br>
<strong>From:</strong> Ifeanyi (<em>ifeanyeg2012_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-12 00:58:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20920.php">Ifeanyi: "[OMPI users] openmpi-1.7rc5 cannot install when build with ./configure --with-ft=cr"</a>
<li><strong>Previous message:</strong> <a href="20918.php">Ifeanyi: "Re: [OMPI users] Live process migration"</a>
<li><strong>In reply to:</strong> <a href="20914.php">Jaroslaw Slawinski: "Re: [OMPI users] Live process migration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20915.php">Josh Hursey: "Re: [OMPI users] Live process migration"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
this is what I did after installing dmtcp
<br>
&nbsp;on a different terminal  # ./dmtcp_coordinator
<br>
on another terminal # ./dmtcp_checkpoint mpirun ./icpi
<br>
<p>When I ran this command # ./dmtcp_command --checkpoint.
<br>
it terminates with this messages
<br>
<p>[8147] WARNING at connectionmanager.cpp:263 in fdToDevice;
<br>
REASON='JWARNING(false) failed'
<br>
Message: PTS Device not found
<br>
[8147] ERROR at connectionmanager.cpp:277 in fdToDevice;
<br>
REASON='JASSERT(false) failed'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fd = 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;device = /dev/pts/2 (deleted)
<br>
Message: PTS Device not found in connection list
<br>
icpi (8147): Terminating...
<br>
<p>pls what is the way to migrate process with dmtcp?
<br>
<p>please assist
<br>
Regards - Ifeanyi
<br>
<p>On Tue, Dec 11, 2012 at 5:10 PM, Jaroslaw Slawinski &lt;jaross_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; true, looks like the entire sourceforge is down
</span><br>
<span class="quotelev1">&gt; best
</span><br>
<span class="quotelev1">&gt; js
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Dec 11, 2012 at 12:57 AM, Ifeanyi &lt;ifeanyeg2012_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Thanks Jaroslaw,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I will try it asap, it appears that DMTCP at sourceforge.net site is
</span><br>
<span class="quotelev1">&gt; down at
</span><br>
<span class="quotelev2">&gt; &gt; the moment.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Regards - ifeanyi
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Tue, Dec 11, 2012 at 4:11 PM, Jaroslaw Slawinski
</span><br>
<span class="quotelev2">&gt; &gt; &lt;jaross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; check DMTCP - it worked for me
</span><br>
<span class="quotelev3">&gt; &gt;&gt; js
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Mon, Dec 10, 2012 at 11:39 PM, Ifeanyi &lt;ifeanyeg2012_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Hi all,
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Just wondering if live process migration of processes is supported in
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; open
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; mpi?
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; or any idea of how to do live migration of processes pls.
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Regards,
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Ifeanyi
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20919/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20920.php">Ifeanyi: "[OMPI users] openmpi-1.7rc5 cannot install when build with ./configure --with-ft=cr"</a>
<li><strong>Previous message:</strong> <a href="20918.php">Ifeanyi: "Re: [OMPI users] Live process migration"</a>
<li><strong>In reply to:</strong> <a href="20914.php">Jaroslaw Slawinski: "Re: [OMPI users] Live process migration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20915.php">Josh Hursey: "Re: [OMPI users] Live process migration"</a>
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
