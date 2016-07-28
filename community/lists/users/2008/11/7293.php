<?
$subject_val = "Re: [OMPI users] timing + /usr/bin/time";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 12 00:01:31 2008" -->
<!-- isoreceived="20081112050131" -->
<!-- sent="Wed, 12 Nov 2008 14:01:23 +0900" -->
<!-- isosent="20081112050123" -->
<!-- name="Raymond Wan" -->
<!-- email="rwan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] timing + /usr/bin/time" -->
<!-- id="491A6323.5070509_at_kuicr.kyoto-u.ac.jp" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20081111141656.6bde5c1e.fabian.haensel_at_zih.tu-dresden.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] timing + /usr/bin/time<br>
<strong>From:</strong> Raymond Wan (<em>rwan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-12 00:01:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7294.php">Neville Clark: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<li><strong>Previous message:</strong> <a href="7292.php">Gus Correa: "Re: [OMPI users] Trouble with OpenMPI and Intel 10.1 compilers"</a>
<li><strong>In reply to:</strong> <a href="7277.php">Fabian H&#195;&#164;nsel: "Re: [OMPI users] timing + /usr/bin/time (was: Re:  dual cores)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7295.php">Fabian Hänsel: "Re: [OMPI users] timing + /usr/bin/time"</a>
<li><strong>Reply:</strong> <a href="7295.php">Fabian Hänsel: "Re: [OMPI users] timing + /usr/bin/time"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Fabian,
<br>
<p><p>Fabian H&#228;nsel wrote:
<br>
<span class="quotelev2">&gt;&gt; On a separate topic, but related to your post here, how did you do
</span><br>
<span class="quotelev2">&gt;&gt; the timing?  [Especially to so many digits of accuracy.  :-) ]
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; two things to consider:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i) What do I actually (want to) measure?
</span><br>
<span class="quotelev1">&gt; ii) How accurate can I do that?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i)
</span><br>
<span class="quotelev1">&gt; Option iA) execution time of the whole program
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; One could use /usr/bin/time. Simple, but that is not that accurate. If
</span><br>
<span class="quotelev1">&gt; you do not need microsecond accuracy and measure all the things you
</span><br>
<span class="quotelev1">&gt; want to compare in the same fashion a run like &quot;/usr/bin/time mpirun
</span><br>
<span class="quotelev1">&gt; -np X myprog&quot; should perfectly suits your needs.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p><p>So, to make sure I understand what happens...  This command:
<br>
<p>mpirun -np 2 myprog
<br>
<p>starts the program &quot;mpirun&quot; and two processes of &quot;myprog&quot;.  So, what the 
<br>
&quot;real time&quot; of /usr/bin/time reports is the wall clock for mpirun.
<br>
<p>Does the user time have any meaning here?  I'm not very good with the 
<br>
theory behind multi-processor programming...but Perl (for example)has a 
<br>
&quot;times&quot; function (<a href="http://perldoc.perl.org/functions/times.html">http://perldoc.perl.org/functions/times.html</a>) which 
<br>
&quot;Returns a ... list ... for this process and the children of this 
<br>
process&quot;.  Are the two instances of myprog considered children of mpirun?
<br>
<p>Hmmmm, I guess user time does not matter since it is real time that we 
<br>
are interested in reducing.
<br>
<p><p><span class="quotelev1">&gt; Option iB) time my 'crunching core' runs
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Something in rank0 like
</span><br>
<span class="quotelev1">&gt; &quot;time1=gettime(); crunch_alot(); time2=gettime(); time_used=time2-time1;&quot;
</span><br>
<span class="quotelev1">&gt; is much better suited to actually measure only the important parts,
</span><br>
<span class="quotelev1">&gt; esp. if they can run shortly compared to overall programm execution
</span><br>
<span class="quotelev1">&gt; time. (this assumes that crunch_alot() has a barrier character, e.g. by
</span><br>
<span class="quotelev1">&gt; collecting values from all processes at the end)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ii)
</span><br>
<span class="quotelev1">&gt; MPI_Wtime() is generally considered the best way, as it is platform
</span><br>
<span class="quotelev1">&gt; independent and usually MPI libs try to use the most accurate
</span><br>
<span class="quotelev1">&gt; measurement method available on every certain platform.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p><p>Yes, gettimg () would work also.  I didn' t know there was a MPI_Wtime 
<br>
() function, though.  Thanks!
<br>
<p><span class="quotelev1">&gt; I've just used gettimeofday(), because some of my demo apps are
</span><br>
<span class="quotelev1">&gt; intended to run independent of MPI. So my accuracy is at most micro
</span><br>
<span class="quotelev1">&gt; seconds (on some platforms that might be different; e.g. only 10ms-steps).
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; [Especially to so many digits of accuracy.  :-) ]
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt; By unsuitably using printf(&quot;%.9f&quot;,time)   ;-)
</span><br>
<span class="quotelev1">&gt; I've just not cleared up that part. (But still the thing
</span><br>
<span class="quotelev1">&gt; I wanted to demonstrate became quite apparent.)
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p><p>Ah!  You demonstrated that well -- thanks!
<br>
<p>However, I saw all those digits of accuracy and I thought you were doing 
<br>
some magic with timing MPI programs that I'd like to know -- it was only 
<br>
a &quot;%.9f&quot;, after all...  :-)
<br>
<p>Thank you!
<br>
<p>Ray
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7294.php">Neville Clark: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<li><strong>Previous message:</strong> <a href="7292.php">Gus Correa: "Re: [OMPI users] Trouble with OpenMPI and Intel 10.1 compilers"</a>
<li><strong>In reply to:</strong> <a href="7277.php">Fabian H&#195;&#164;nsel: "Re: [OMPI users] timing + /usr/bin/time (was: Re:  dual cores)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7295.php">Fabian Hänsel: "Re: [OMPI users] timing + /usr/bin/time"</a>
<li><strong>Reply:</strong> <a href="7295.php">Fabian Hänsel: "Re: [OMPI users] timing + /usr/bin/time"</a>
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
