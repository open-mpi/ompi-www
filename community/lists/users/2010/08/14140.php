<?
$subject_val = "Re: [OMPI users] Fwd: Problems with OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 31 12:52:22 2010" -->
<!-- isoreceived="20100831165222" -->
<!-- sent="Tue, 31 Aug 2010 09:52:18 -0700" -->
<!-- isosent="20100831165218" -->
<!-- name="David Zhang" -->
<!-- email="solarbikedz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fwd: Problems with OpenMPI" -->
<!-- id="AANLkTinmU0K53JMNdQnu_j2T2Fr9ktLnKT=9aKwD1oxR_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTi=Xy-hD2HXnUswOTr-ko6-QVH+CAAFn=M76YhGH_at_mail.gmail.com" -->
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
<strong>From:</strong> David Zhang (<em>solarbikedz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-31 12:52:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14141.php">Osvaldo Reis: "Re: [OMPI users] Fwd: Problems with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="14139.php">Osvaldo Reis: "[OMPI users] Fwd: Problems with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="14139.php">Osvaldo Reis: "[OMPI users] Fwd: Problems with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14141.php">Osvaldo Reis: "Re: [OMPI users] Fwd: Problems with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="14141.php">Osvaldo Reis: "Re: [OMPI users] Fwd: Problems with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="14142.php">Gus Correa: "Re: [OMPI users] Fwd: Problems with OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Check firewall, network setting like subnet, and ssh keys?
<br>
<p>On 8/31/10, Osvaldo Reis &lt;osvaldoreisss_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi, I wanted to use openmpi, I install with no errors, and when I run de
</span><br>
<span class="quotelev1">&gt; examples in local it work well, but when I specify another host to run it
</span><br>
<span class="quotelev1">&gt; doesn't work. There are no errors but the it doesn't show anything and don't
</span><br>
<span class="quotelev1">&gt; start the process in another host and don't stop to run in localhost. Then I
</span><br>
<span class="quotelev1">&gt; press Crtl+C to killl the process and it shows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ^Cmpirun: killing job...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev1">&gt; that caused that situation.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun was unable to cleanly terminate the daemons on the nodes shown
</span><br>
<span class="quotelev1">&gt; below. Additional manual cleanup may be required - please refer to
</span><br>
<span class="quotelev1">&gt; the &quot;orte-clean&quot; tool for assistance.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;         anotherhost - daemon did not report back when launched
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I loot at /var/log/secure and it started the connection but after he close
</span><br>
<span class="quotelev1">&gt; without execute anything.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Running localhost
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [user_at_host1 examples]$ mpirun -np 8 --host localhost ./hello_c
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 0 of 8
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 1 of 8
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 2 of 8
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 4 of 8
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 5 of 8
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 6 of 8
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 7 of 8
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 3 of 8
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Running in another host
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [user_at_host1 examples]$ mpirun -np 8 --host anotherhost ./hello_c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Some help please!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Osvaldo Reis Junior
</span><br>
<span class="quotelev1">&gt; Engenharia de Computa&#231;&#227;o - UEPG
</span><br>
<span class="quotelev1">&gt; Laborat&#243;rio de Gen&#244;mica e Express&#227;o - LGE
</span><br>
<span class="quotelev1">&gt; Universidade Estadual de Campinas - UNICAMP
</span><br>
<span class="quotelev1">&gt; MSN: osvaldoreis85_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Skype: osvaldoreisss
</span><br>
<span class="quotelev1">&gt; Cel: (19) 8128-5273
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
Sent from my mobile device
David Zhang
University of California, San Diego
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14141.php">Osvaldo Reis: "Re: [OMPI users] Fwd: Problems with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="14139.php">Osvaldo Reis: "[OMPI users] Fwd: Problems with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="14139.php">Osvaldo Reis: "[OMPI users] Fwd: Problems with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14141.php">Osvaldo Reis: "Re: [OMPI users] Fwd: Problems with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="14141.php">Osvaldo Reis: "Re: [OMPI users] Fwd: Problems with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="14142.php">Gus Correa: "Re: [OMPI users] Fwd: Problems with OpenMPI"</a>
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
