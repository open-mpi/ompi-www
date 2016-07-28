<?
$subject_val = "Re: [OMPI users] Fwd: Problems with OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 31 13:22:58 2010" -->
<!-- isoreceived="20100831172258" -->
<!-- sent="Tue, 31 Aug 2010 14:22:52 -0300" -->
<!-- isosent="20100831172252" -->
<!-- name="Osvaldo Reis" -->
<!-- email="osvaldoreisss_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fwd: Problems with OpenMPI" -->
<!-- id="AANLkTinRqkFnaw3yB8-fsaBYuiwQSL907WdkuKLy3jNC_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTinmU0K53JMNdQnu_j2T2Fr9ktLnKT=9aKwD1oxR_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Fwd: Problems with OpenMPI<br>
<strong>From:</strong> Osvaldo Reis (<em>osvaldoreisss_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-31 13:22:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14142.php">Gus Correa: "Re: [OMPI users] Fwd: Problems with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="14140.php">David Zhang: "Re: [OMPI users] Fwd: Problems with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="14140.php">David Zhang: "Re: [OMPI users] Fwd: Problems with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14142.php">Gus Correa: "Re: [OMPI users] Fwd: Problems with OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ty David, the problem was my firewall. The server machine is new and who
<br>
install the OS forgot to desable the iptables.
<br>
<p>Thanks
<br>
<p>2010/8/31 David Zhang &lt;solarbikedz_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; Check firewall, network setting like subnet, and ssh keys?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 8/31/10, Osvaldo Reis &lt;osvaldoreisss_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi, I wanted to use openmpi, I install with no errors, and when I run de
</span><br>
<span class="quotelev2">&gt; &gt; examples in local it work well, but when I specify another host to run it
</span><br>
<span class="quotelev2">&gt; &gt; doesn't work. There are no errors but the it doesn't show anything and
</span><br>
<span class="quotelev1">&gt; don't
</span><br>
<span class="quotelev2">&gt; &gt; start the process in another host and don't stop to run in localhost.
</span><br>
<span class="quotelev1">&gt; Then I
</span><br>
<span class="quotelev2">&gt; &gt; press Crtl+C to killl the process and it shows:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ^Cmpirun: killing job...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev2">&gt; &gt; that caused that situation.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; mpirun was unable to cleanly terminate the daemons on the nodes shown
</span><br>
<span class="quotelev2">&gt; &gt; below. Additional manual cleanup may be required - please refer to
</span><br>
<span class="quotelev2">&gt; &gt; the &quot;orte-clean&quot; tool for assistance.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;         anotherhost - daemon did not report back when launched
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I loot at /var/log/secure and it started the connection but after he
</span><br>
<span class="quotelev1">&gt; close
</span><br>
<span class="quotelev2">&gt; &gt; without execute anything.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Running localhost
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [user_at_host1 examples]$ mpirun -np 8 --host localhost ./hello_c
</span><br>
<span class="quotelev2">&gt; &gt; Hello, world, I am 0 of 8
</span><br>
<span class="quotelev2">&gt; &gt; Hello, world, I am 1 of 8
</span><br>
<span class="quotelev2">&gt; &gt; Hello, world, I am 2 of 8
</span><br>
<span class="quotelev2">&gt; &gt; Hello, world, I am 4 of 8
</span><br>
<span class="quotelev2">&gt; &gt; Hello, world, I am 5 of 8
</span><br>
<span class="quotelev2">&gt; &gt; Hello, world, I am 6 of 8
</span><br>
<span class="quotelev2">&gt; &gt; Hello, world, I am 7 of 8
</span><br>
<span class="quotelev2">&gt; &gt; Hello, world, I am 3 of 8
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Running in another host
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [user_at_host1 examples]$ mpirun -np 8 --host anotherhost ./hello_c
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Some help please!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Osvaldo Reis Junior
</span><br>
<span class="quotelev2">&gt; &gt; Engenharia de Computa&#231;&#227;o - UEPG
</span><br>
<span class="quotelev2">&gt; &gt; Laborat&#243;rio de Gen&#244;mica e Express&#227;o - LGE
</span><br>
<span class="quotelev2">&gt; &gt; Universidade Estadual de Campinas - UNICAMP
</span><br>
<span class="quotelev2">&gt; &gt; MSN: osvaldoreis85_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Skype: osvaldoreisss
</span><br>
<span class="quotelev2">&gt; &gt; Cel: (19) 8128-5273
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Sent from my mobile device
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; David Zhang
</span><br>
<span class="quotelev1">&gt; University of California, San Diego
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
<p><p><p><pre>
-- 
Osvaldo Reis Junior
Engenharia de Computa&#231;&#227;o - UEPG
Laborat&#243;rio de Gen&#244;mica e Express&#227;o - LGE
Universidade Estadual de Campinas - UNICAMP
MSN: osvaldoreis85_at_[hidden]
Skype: osvaldoreisss
Cel: (19) 8128-5273
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14141/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14142.php">Gus Correa: "Re: [OMPI users] Fwd: Problems with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="14140.php">David Zhang: "Re: [OMPI users] Fwd: Problems with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="14140.php">David Zhang: "Re: [OMPI users] Fwd: Problems with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14142.php">Gus Correa: "Re: [OMPI users] Fwd: Problems with OpenMPI"</a>
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
