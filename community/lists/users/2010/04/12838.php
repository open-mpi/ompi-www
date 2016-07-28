<?
$subject_val = "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 28 14:39:32 2010" -->
<!-- isoreceived="20100428183932" -->
<!-- sent="Wed, 28 Apr 2010 14:39:20 -0400" -->
<!-- isosent="20100428183920" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS" -->
<!-- id="4BD880D8.3040200_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="g2q28d120cc1004272315w70c27019v1741c2dedd6b8716_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-28 14:39:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12839.php">Douglas Guptill: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and	CentOS"</a>
<li><strong>Previous message:</strong> <a href="12837.php">Pooja Varshneya: "Re: [OMPI users] [OMP users]: OpenMP1.4 tuning for sending large messages"</a>
<li><strong>In reply to:</strong> <a href="12828.php">Asad Ali: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12839.php">Douglas Guptill: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and	CentOS"</a>
<li><strong>Reply:</strong> <a href="12839.php">Douglas Guptill: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and	CentOS"</a>
<li><strong>Reply:</strong> <a href="12841.php">Asad Ali: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Asad
<br>
<p>I think the speed vs. accuracy tradeoff will always be there.
<br>
Getting both at the same time is kind of a holy grail,
<br>
everybody wants it!
<br>
Whoever asked you to get both gotta be kidding.
<br>
<p>Somebody already suggested enforcing IEEE floating point standard,
<br>
if you want numerical accuracy and portability.
<br>
However, you loose performance with strict IEEE,
<br>
as you do if you don't use O2 or O3, or SSE/SSE2/etc instructions.
<br>
As far as I know, there is no way out of that.
<br>
<p>Nevertheless, if your algorithm is carefully designed,
<br>
you may get very good results even if you optimize.
<br>
<p>Here is a classic and simple article about IEEE arithmetic:
<br>
perso.ens-lyon.fr/jean-michel.muller/goldberg.pdf
<br>
www.math.umd.edu/~jkolesar/mait613/floating_point_math.pdf
<br>
<p>Wikipedia on compiler optimization explains the basics:
<br>
<a href="http://en.wikipedia.org/wiki/Compiler_optimization">http://en.wikipedia.org/wiki/Compiler_optimization</a>
<br>
<p>Wikipedia on numerical analysis (round-off error propagation and more):
<br>
<a href="http://en.wikipedia.org/wiki/Numerical_analysis">http://en.wikipedia.org/wiki/Numerical_analysis</a>
<br>
<p>which is a huge scientific field:
<br>
<a href="http://history.siam.org/">http://history.siam.org/</a>
<br>
<p>IIRR, you are using gcc, so check this out for the gcc
<br>
compiler optimization options and what they do:
<br>
<a href="http://gcc.gnu.org/onlinedocs/gcc/Optimize-Options.html">http://gcc.gnu.org/onlinedocs/gcc/Optimize-Options.html</a>
<br>
<a href="http://www.network-theory.co.uk/docs/gccintro/gccintro_49.html">http://www.network-theory.co.uk/docs/gccintro/gccintro_49.html</a>
<br>
<a href="http://www.linuxjournal.com/article/7269">http://www.linuxjournal.com/article/7269</a>
<br>
<p>I am afraid there is no simple answer to your questions,
<br>
or solution to your frustration.
<br>
At least I don't know the answer/solution.
<br>
I wish I did.
<br>
Remember what Jeff Squyres said on this thread:
<br>
'As one of my teachers told me, many years ago, &quot;10.0 divided by 1.0 is 
<br>
rarely 10.0.&quot;'
<br>
<p>Now indeed we got off topic.
<br>
There may be other forums where you could get more help regarding
<br>
optimization and how to design your program to be, let's say,
<br>
&quot;optimization-safe&quot;.
<br>
Hopefully one of the experts on this list could make a suggestion.
<br>
<p>Gus Correa
<br>
---------------------------------------------------------------------
<br>
Gustavo Correa
<br>
Lamont-Doherty Earth Observatory - Columbia University
<br>
Palisades, NY, 10964-8000 - USA
<br>
---------------------------------------------------------------------
<br>
<p>Asad Ali wrote:
<br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Many many thanks to all of you for your time, sincere help, useful tips 
</span><br>
<span class="quotelev1">&gt; and advices.
</span><br>
<span class="quotelev1">&gt; I have solved that problem. I just removed the gcc flag -O3 from my 
</span><br>
<span class="quotelev1">&gt; compile script and the error vanished. However the speed of my code is 
</span><br>
<span class="quotelev1">&gt; also reduced to 50 iterations/minute from 70 iterations/minute, still 
</span><br>
<span class="quotelev1">&gt; not bad.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there any alternative to -O3 flag?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried -O2 too but this also gives errors.
</span><br>
<span class="quotelev1">&gt; I know this is now a non-openmpi problem but I know this is the forum of 
</span><br>
<span class="quotelev1">&gt; experienced programmers so I hope you people would tolerate me and would 
</span><br>
<span class="quotelev1">&gt; help me.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Asad
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Apr 28, 2010 at 4:59 AM, Gus Correa &lt;gus_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:gus_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Hi Dave
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Dave Love wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         Gus Correa &lt;gus_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:gus_at_[hidden]&gt;&gt; writes:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             Or run a serial version on the same set of machines,
</span><br>
<span class="quotelev1">&gt;             compiled in similar ways (compiler version, opt flags, etc)
</span><br>
<span class="quotelev1">&gt;             to the parallel versions, and compare results.
</span><br>
<span class="quotelev1">&gt;             If the results don't differ, then you can start blaming MPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         That wouldn't show that there's actually any OpenMPI-specific
</span><br>
<span class="quotelev1">&gt;         problem,
</span><br>
<span class="quotelev1">&gt;         though -- the parallelism potentially introduces indeterminacy.  [I
</span><br>
<span class="quotelev1">&gt;         don't mean to imply Guy thinks otherwise, or that anyone has enough
</span><br>
<span class="quotelev1">&gt;         information to guess what's actually happening.]  General
</span><br>
<span class="quotelev1">&gt;         discussion of
</span><br>
<span class="quotelev1">&gt;         numerical issues and scientific computing war stories must be way
</span><br>
<span class="quotelev1">&gt;         off-topic here...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     You are right.
</span><br>
<span class="quotelev1">&gt;     Actually, on a case of an ocean model that I tested this way,
</span><br>
<span class="quotelev1">&gt;     exactly the opposite happened.
</span><br>
<span class="quotelev1">&gt;     The optimization flags were the main cause of changes in the results,
</span><br>
<span class="quotelev1">&gt;     as expected.
</span><br>
<span class="quotelev1">&gt;     Whether the code was compiled and run serial or parallel with MPI
</span><br>
<span class="quotelev1">&gt;     made little difference (although it might).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Well, IMHO, this is not totally off topic.
</span><br>
<span class="quotelev1">&gt;     I don't think it hurts the list protocol to have a relatively
</span><br>
<span class="quotelev1">&gt;     lax criterion for what is on or off.
</span><br>
<span class="quotelev1">&gt;     After all, the original question and the following
</span><br>
<span class="quotelev1">&gt;     discussion was about whether MPI (OpenMPI in particular)
</span><br>
<span class="quotelev1">&gt;     can affect or not numerical accuracy.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Regards,
</span><br>
<span class="quotelev1">&gt;     Gus Correa
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         _______________________________________________
</span><br>
<span class="quotelev1">&gt;         users mailing list
</span><br>
<span class="quotelev1">&gt;         users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; &quot;Statistical thinking will one day be as necessary for efficient 
</span><br>
<span class="quotelev1">&gt; citizenship as the ability to read and write.&quot; - H.G. Wells
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12839.php">Douglas Guptill: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and	CentOS"</a>
<li><strong>Previous message:</strong> <a href="12837.php">Pooja Varshneya: "Re: [OMPI users] [OMP users]: OpenMP1.4 tuning for sending large messages"</a>
<li><strong>In reply to:</strong> <a href="12828.php">Asad Ali: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12839.php">Douglas Guptill: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and	CentOS"</a>
<li><strong>Reply:</strong> <a href="12839.php">Douglas Guptill: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and	CentOS"</a>
<li><strong>Reply:</strong> <a href="12841.php">Asad Ali: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
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
