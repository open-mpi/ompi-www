<?
$subject_val = "Re: [OMPI users] timing + /usr/bin/time (was: Re:  dual cores)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 11 08:17:04 2008" -->
<!-- isoreceived="20081111131704" -->
<!-- sent="Tue, 11 Nov 2008 14:16:56 +0100" -->
<!-- isosent="20081111131656" -->
<!-- name="Fabian H&#195;&#164;nsel" -->
<!-- email="fabian.haensel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] timing + /usr/bin/time (was: Re:  dual cores)" -->
<!-- id="20081111141656.6bde5c1e.fabian.haensel_at_zih.tu-dresden.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49191EB4.1090803_at_kuicr.kyoto-u.ac.jp" -->
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
<strong>Subject:</strong> Re: [OMPI users] timing + /usr/bin/time (was: Re:  dual cores)<br>
<strong>From:</strong> Fabian H&#195;&#164;nsel (<em>fabian.haensel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-11 08:16:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7278.php">Jeff Squyres: "Re: [OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?"</a>
<li><strong>Previous message:</strong> <a href="7276.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problems using mpi with cmake"</a>
<li><strong>In reply to:</strong> <a href="7274.php">Raymond Wan: "Re: [OMPI users] dual cores --&gt; timing + /usr/bin/time"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7293.php">Raymond Wan: "Re: [OMPI users] timing + /usr/bin/time"</a>
<li><strong>Reply:</strong> <a href="7293.php">Raymond Wan: "Re: [OMPI users] timing + /usr/bin/time"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ray,
<br>
<p><span class="quotelev1">&gt; On a separate topic, but related to your post here, how did you do
</span><br>
<span class="quotelev1">&gt; the timing?  [Especially to so many digits of accuracy.  :-) ]
</span><br>
<p>two things to consider:
<br>
<p>i) What do I actually (want to) measure?
<br>
ii) How accurate can I do that?
<br>
<p>i)
<br>
Option iA) execution time of the whole program
<br>
<p>One could use /usr/bin/time. Simple, but that is not that accurate. If
<br>
you do not need microsecond accuracy and measure all the things you
<br>
want to compare in the same fashion a run like &quot;/usr/bin/time mpirun
<br>
-np X myprog&quot; should perfectly suits your needs.
<br>
<p>Option iB) time my 'crunching core' runs
<br>
<p>Something in rank0 like
<br>
&quot;time1=gettime(); crunch_alot(); time2=gettime(); time_used=time2-time1;&quot;
<br>
is much better suited to actually measure only the important parts,
<br>
esp. if they can run shortly compared to overall programm execution
<br>
time. (this assumes that crunch_alot() has a barrier character, e.g. by
<br>
collecting values from all processes at the end)
<br>
<p>ii)
<br>
MPI_Wtime() is generally considered the best way, as it is platform
<br>
independent and usually MPI libs try to use the most accurate
<br>
measurement method available on every certain platform.
<br>
<p>I've just used gettimeofday(), because some of my demo apps are
<br>
intended to run independent of MPI. So my accuracy is at most micro
<br>
seconds (on some platforms that might be different; e.g. only 10ms-steps).
<br>
<p><span class="quotelev1">&gt; [Especially to so many digits of accuracy.  :-) ]
</span><br>
By unsuitably using printf(&quot;%.9f&quot;,time)   ;-)
<br>
I've just not cleared up that part. (But still the thing
<br>
I wanted to demonstrate became quite apparent.)
<br>
<p>Best regards,
<br>
&nbsp;&nbsp;Fabian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7278.php">Jeff Squyres: "Re: [OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?"</a>
<li><strong>Previous message:</strong> <a href="7276.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problems using mpi with cmake"</a>
<li><strong>In reply to:</strong> <a href="7274.php">Raymond Wan: "Re: [OMPI users] dual cores --&gt; timing + /usr/bin/time"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7293.php">Raymond Wan: "Re: [OMPI users] timing + /usr/bin/time"</a>
<li><strong>Reply:</strong> <a href="7293.php">Raymond Wan: "Re: [OMPI users] timing + /usr/bin/time"</a>
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
