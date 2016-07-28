<?
$subject_val = "Re: [OMPI users] Problem with sending messages from one of the machines";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 17 11:45:36 2010" -->
<!-- isoreceived="20101117164536" -->
<!-- sent="Wed, 17 Nov 2010 17:45:08 +0100" -->
<!-- isosent="20101117164508" -->
<!-- name="Grzegorz Maj" -->
<!-- email="maju3_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with sending messages from one of the machines" -->
<!-- id="AANLkTi=ExKoXAV0bbYOMEZeQdXrkEYjYKMjyL5UF0YKD_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="97706573-790A-444A-8FCD-9855EE011294_at_cisco.com" -->
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
<strong>From:</strong> Grzegorz Maj (<em>maju3_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-17 11:45:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14816.php">Gus Correa: "Re: [OMPI users] mpi-io, fortran, going crazy... (ADENDA)"</a>
<li><strong>Previous message:</strong> <a href="14814.php">Terry Dontje: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>In reply to:</strong> <a href="14740.php">Jeff Squyres: "Re: [OMPI users] Problem with sending messages from one of the machines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14824.php">Krzysztof Zarzycki: "Re: [OMPI users] Problem with sending messages from one of the machines"</a>
<li><strong>Reply:</strong> <a href="14824.php">Krzysztof Zarzycki: "Re: [OMPI users] Problem with sending messages from one of the machines"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
2010/11/11 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; On Nov 11, 2010, at 3:23 PM, Krzysztof Zarzycki wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; No, unfortunately specification of interfaces is a little more complicated... &#160;eth0/1/2 is not common for both machines.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you define &quot;common&quot;? &#160;Do you mean that eth0 on one machine is on a different network then eth0 on the other machine?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there any way that you can make them the same? &#160;It would certainly make things easier.
</span><br>
<p>Yes, they are on different networks and unfortunately we are not
<br>
allowed to play with this.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've tried to play with (oob/btl)_tcp_ if_include, but actually... I don't know exactly how.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; See my other mail:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160; &#160;<a href="http://www.open-mpi.org/community/lists/users/2010/11/14737.php">http://www.open-mpi.org/community/lists/users/2010/11/14737.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Anyway, do you have any ideas how to further debug the communication problem?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The connect() is not getting through somehow. &#160;Sadly, we don't have enough debug messages to show exactly what is going wrong when these kinds of things happen; I have a half-finished branch that has much better debug/error messages, but I've never had the time to finish it (indeed, I think there's a bug in that development branch right now, otherwise I'd recommend giving it a whirl). &#160;:-\
</span><br>
<p>Analyzing the strace of both processes shows, that on both sides the
<br>
call to 'poll' after connect/accept succeeds. As I understand they
<br>
even exchange some information, which is always 8 bytes, like
<br>
D\227\0\1\0\0\0\0. One of them sends this information and the other
<br>
receives it. But after receiving, it does:
<br>
<p><pre>
----
recv(8, &quot;\5g\0\1\0\0\0\0&quot;, 8, 0)        = 8
fcntl64(8, F_GETFL)                     = 0x2 (flags O_RDWR)
fcntl64(8, F_SETFL, O_RDWR|O_NONBLOCK)  = 0
getpeername(8, {sa_family=AF_INET, sin_port=htons(57885),
sin_addr=inet_addr(&quot;10.0.0.2&quot;)}, [16]) = 0
close(8)
----
In a working scenario (on another machines), after receiving, these
bytes are resent and then proceeds the proper communication (my
'hello' message is sent).
The above address 10.0.0.2 is eth2 on the host machine, which indeed
should be used in this communication.
While playing with network interfaces it came out, that when we bring
down one of the aliases (eth2:0), it starts working. How should we
enforce mpirun not to use this alias, when it's up? We were trying to
use (oob/btl)_tcp_ if_exclude and specifying eth2:0, but it doesn't
seem to help.
Regards,
Grzegorz
&gt;
&gt; --
&gt; Jeff Squyres
&gt; jsquyres_at_[hidden]
&gt; For corporate legal information go to:
&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
&gt;
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;
&gt;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14816.php">Gus Correa: "Re: [OMPI users] mpi-io, fortran, going crazy... (ADENDA)"</a>
<li><strong>Previous message:</strong> <a href="14814.php">Terry Dontje: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>In reply to:</strong> <a href="14740.php">Jeff Squyres: "Re: [OMPI users] Problem with sending messages from one of the machines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14824.php">Krzysztof Zarzycki: "Re: [OMPI users] Problem with sending messages from one of the machines"</a>
<li><strong>Reply:</strong> <a href="14824.php">Krzysztof Zarzycki: "Re: [OMPI users] Problem with sending messages from one of the machines"</a>
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
