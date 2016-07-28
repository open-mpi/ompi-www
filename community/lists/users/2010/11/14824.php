<?
$subject_val = "Re: [OMPI users] Problem with sending messages from one of the machines";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 18 05:20:07 2010" -->
<!-- isoreceived="20101118102007" -->
<!-- sent="Thu, 18 Nov 2010 11:19:41 +0100" -->
<!-- isosent="20101118101941" -->
<!-- name="Krzysztof Zarzycki" -->
<!-- email="k.zarzycki_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with sending messages from one of the machines" -->
<!-- id="AANLkTi=xdquKcXn_fP6sYVBZtccuDvjN8XtEhuQX3Bqw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTi=ExKoXAV0bbYOMEZeQdXrkEYjYKMjyL5UF0YKD_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with sending messages from one of the machines<br>
<strong>From:</strong> Krzysztof Zarzycki (<em>k.zarzycki_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-18 05:19:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14825.php">Terry Dontje: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Previous message:</strong> <a href="14823.php">tmishima_at_[hidden]: "Re: [OMPI users] SYSTEM CPU with OpenMPI 1.4.3"</a>
<li><strong>In reply to:</strong> <a href="14815.php">Grzegorz Maj: "Re: [OMPI users] Problem with sending messages from one of the machines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14933.php">George Bosilca: "Re: [OMPI users] Problem with sending messages from one of the machines"</a>
<li><strong>Reply:</strong> <a href="14933.php">George Bosilca: "Re: [OMPI users] Problem with sending messages from one of the machines"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We just discovered this ticket, which might describe the same problem that
<br>
we have:
<br>
<p><a href="https://svn.open-mpi.org/trac/ompi/ticket/1505">https://svn.open-mpi.org/trac/ompi/ticket/1505</a>
<br>
<p>It seems unresolved... do you have a workaround for it? I've seen the &quot;-mca
<br>
opal_net_private_ipv4 &quot; parameter, but I don't exactly know how to use it...
<br>
At least my experiments failed to do anything.
<br>
<p>I'll be very grateful for your help,
<br>
Krzysztof
<br>
<p><p>2010/11/17 Grzegorz Maj &lt;maju3_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; 2010/11/11 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt; &gt; On Nov 11, 2010, at 3:23 PM, Krzysztof Zarzycki wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; No, unfortunately specification of interfaces is a little more
</span><br>
<span class="quotelev1">&gt; complicated...  eth0/1/2 is not common for both machines.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Can you define &quot;common&quot;?  Do you mean that eth0 on one machine is on a
</span><br>
<span class="quotelev1">&gt; different network then eth0 on the other machine?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is there any way that you can make them the same?  It would certainly
</span><br>
<span class="quotelev1">&gt; make things easier.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, they are on different networks and unfortunately we are not
</span><br>
<span class="quotelev1">&gt; allowed to play with this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I've tried to play with (oob/btl)_tcp_ if_include, but actually... I
</span><br>
<span class="quotelev1">&gt; don't know exactly how.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; See my other mail:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    <a href="http://www.open-mpi.org/community/lists/users/2010/11/14737.php">http://www.open-mpi.org/community/lists/users/2010/11/14737.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Anyway, do you have any ideas how to further debug the communication
</span><br>
<span class="quotelev1">&gt; problem?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The connect() is not getting through somehow.  Sadly, we don't have
</span><br>
<span class="quotelev1">&gt; enough debug messages to show exactly what is going wrong when these kinds
</span><br>
<span class="quotelev1">&gt; of things happen; I have a half-finished branch that has much better
</span><br>
<span class="quotelev1">&gt; debug/error messages, but I've never had the time to finish it (indeed, I
</span><br>
<span class="quotelev1">&gt; think there's a bug in that development branch right now, otherwise I'd
</span><br>
<span class="quotelev1">&gt; recommend giving it a whirl).  :-\
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Analyzing the strace of both processes shows, that on both sides the
</span><br>
<span class="quotelev1">&gt; call to 'poll' after connect/accept succeeds. As I understand they
</span><br>
<span class="quotelev1">&gt; even exchange some information, which is always 8 bytes, like
</span><br>
<span class="quotelev1">&gt; D\227\0\1\0\0\0\0. One of them sends this information and the other
</span><br>
<span class="quotelev1">&gt; receives it. But after receiving, it does:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; recv(8, &quot;\5g\0\1\0\0\0\0&quot;, 8, 0)        = 8
</span><br>
<span class="quotelev1">&gt; fcntl64(8, F_GETFL)                     = 0x2 (flags O_RDWR)
</span><br>
<span class="quotelev1">&gt; fcntl64(8, F_SETFL, O_RDWR|O_NONBLOCK)  = 0
</span><br>
<span class="quotelev1">&gt; getpeername(8, {sa_family=AF_INET, sin_port=htons(57885),
</span><br>
<span class="quotelev1">&gt; sin_addr=inet_addr(&quot;10.0.0.2&quot;)}, [16]) = 0
</span><br>
<span class="quotelev1">&gt; close(8)
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In a working scenario (on another machines), after receiving, these
</span><br>
<span class="quotelev1">&gt; bytes are resent and then proceeds the proper communication (my
</span><br>
<span class="quotelev1">&gt; 'hello' message is sent).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The above address 10.0.0.2 is eth2 on the host machine, which indeed
</span><br>
<span class="quotelev1">&gt; should be used in this communication.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; While playing with network interfaces it came out, that when we bring
</span><br>
<span class="quotelev1">&gt; down one of the aliases (eth2:0), it starts working. How should we
</span><br>
<span class="quotelev1">&gt; enforce mpirun not to use this alias, when it's up? We were trying to
</span><br>
<span class="quotelev1">&gt; use (oob/btl)_tcp_ if_exclude and specifying eth2:0, but it doesn't
</span><br>
<span class="quotelev1">&gt; seem to help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Grzegorz
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14824/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14825.php">Terry Dontje: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Previous message:</strong> <a href="14823.php">tmishima_at_[hidden]: "Re: [OMPI users] SYSTEM CPU with OpenMPI 1.4.3"</a>
<li><strong>In reply to:</strong> <a href="14815.php">Grzegorz Maj: "Re: [OMPI users] Problem with sending messages from one of the machines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14933.php">George Bosilca: "Re: [OMPI users] Problem with sending messages from one of the machines"</a>
<li><strong>Reply:</strong> <a href="14933.php">George Bosilca: "Re: [OMPI users] Problem with sending messages from one of the machines"</a>
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
