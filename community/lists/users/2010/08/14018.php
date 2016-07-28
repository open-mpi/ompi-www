<?
$subject_val = "Re: [OMPI users] OpenMPI Run-Time &quot;Freedom&quot; Question";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 13 12:58:27 2010" -->
<!-- isoreceived="20100813165827" -->
<!-- sent="Fri, 13 Aug 2010 11:58:20 -0500" -->
<!-- isosent="20100813165820" -->
<!-- name="Michael E. Thomadakis" -->
<!-- email="miket7777_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI Run-Time &amp;quot;Freedom&amp;quot; Question" -->
<!-- id="4C6579AC.2080104_at_gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="AANLkTi=gO5=1McfN=myiHywWta6Dy+AjPpNWLMNj7c9H_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI Run-Time &quot;Freedom&quot; Question<br>
<strong>From:</strong> Michael E. Thomadakis (<em>miket7777_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-13 12:58:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14019.php">David Ronis: "Re: [OMPI users] Abort"</a>
<li><strong>Previous message:</strong> <a href="14017.php">Joshua Hursey: "Re: [OMPI users] Checkpointing mpi4py program"</a>
<li><strong>In reply to:</strong> <a href="14007.php">Jed Brown: "Re: [OMPI users] OpenMPI Run-Time &quot;Freedom&quot; Question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14001.php">Tim Prince: "Re: [OMPI users] OpenMPI Run-Time &quot;Freedom&quot; Question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;On 08/12/10 21:53, Jed Brown wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Or OMPI_CC=icc-xx.y mpicc ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>If we enable a different set of run time library paths for Intel 
<br>
compilers than those used to build OMPI when we compile and execute the 
<br>
MPI app these new run-time libs will be accessible to OMPI libs to run 
<br>
against instead of those used when OMPI was being built right? I would 
<br>
think that this may cause some problems if for some reason something in 
<br>
the modern run-time libfs differs from the ones used when OMPI was built ?
<br>
<p>A user is hoping to avoid rebuilding his OMPI app but i guess just 
<br>
change LD_LIBRARY_PATH to the latest Intel compile run-time libs and 
<br>
just launch it with teh latest and greatest Intel Libs.... I mentioned 
<br>
to him that the right way is to build the combination of OMPI + Intel 
<br>
run-time that the application is known to work with (since some may 
<br>
fail) but he wants me to insert a fixed run-time lib path for OMPI libs 
<br>
but use different and variable one for the run-time libs of the OMPI 
<br>
application! It is frustrating with people who get &quot;great ideas&quot; but 
<br>
then they presss someone else to make them work instead of doing this 
<br>
themselves....
<br>
<p>anyway thanks....
<br>
<p>Michael
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 12, 2010 5:18 PM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden] 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 12, 2010, at 7:04 PM, Michael E. Thomadakis wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On 08/12/10 18:59, Tim Prince wrote:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The &quot;easy&quot; way to accomplish this would be to:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (a) build OMPI with whatever compiler you decide to use as a &quot;baseline&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (b) do -not- use the wrapper compiler to build the application. 
</span><br>
<span class="quotelev2">&gt;&gt; Instead, do &quot;mpicc --showme&quot; (or whatever language equivalent you 
</span><br>
<span class="quotelev2">&gt;&gt; want) to get the compile line, substitute your &quot;new&quot; compiler library 
</span><br>
<span class="quotelev2">&gt;&gt; for the &quot;old&quot; one, and then execute the resulting command manually.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If you then set your LD_LIBRARY_PATH to the &quot;new&quot; libs, it might work 
</span><br>
<span class="quotelev2">&gt;&gt; - but no guarantees. Still, you could try it - and if it worked, you 
</span><br>
<span class="quotelev2">&gt;&gt; could always just explain that this is a case-by-case situation, and 
</span><br>
<span class="quotelev2">&gt;&gt; so it -could- break with other compiler combinations.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Critical note: the app developers would have to validate the code 
</span><br>
<span class="quotelev2">&gt;&gt; with every combination! Otherwise, correct execution will be a 
</span><br>
<span class="quotelev2">&gt;&gt; complete crap-shoot - just because the app doesn't abnormally 
</span><br>
<span class="quotelev2">&gt;&gt; terminate does -not- mean it generated a correct result!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Thanks for the information on this. We indeed use Intel Compiler 
</span><br>
<span class="quotelev2">&gt;&gt; set 11.1.XXX + OMPI 1.4.1 and ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14018/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14019.php">David Ronis: "Re: [OMPI users] Abort"</a>
<li><strong>Previous message:</strong> <a href="14017.php">Joshua Hursey: "Re: [OMPI users] Checkpointing mpi4py program"</a>
<li><strong>In reply to:</strong> <a href="14007.php">Jed Brown: "Re: [OMPI users] OpenMPI Run-Time &quot;Freedom&quot; Question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14001.php">Tim Prince: "Re: [OMPI users] OpenMPI Run-Time &quot;Freedom&quot; Question"</a>
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
