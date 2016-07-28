<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep  7 17:41:49 2006" -->
<!-- isoreceived="20060907214149" -->
<!-- sent="Thu, 7 Sep 2006 22:41:48 +0100 (GMT+01:00)" -->
<!-- isosent="20060907214148" -->
<!-- name="Eng. A.A. Isola" -->
<!-- email="alfonso.isola_at_[hidden]" -->
<!-- subject="[OMPI devel] R: Re:  MPI2 Client-Server routines BUG!!!" -->
<!-- id="10d8a3abfac.alfonso.isola_at_tin.it" -->
<!-- charset="UTF-8" -->
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
<strong>From:</strong> Eng. A.A. Isola (<em>alfonso.isola_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-09-07 17:41:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1051.php">Pak Lui: "Re: [OMPI devel] MPI2 Client-Server routines OpenMPI BUG!!!"</a>
<li><strong>Previous message:</strong> <a href="1049.php">Ralph Castain: "Re: [OMPI devel] MPI2 Client-Server routines BUG!!!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1052.php">Renato Golin: "Re: [OMPI devel] R: Re: MPI2 Client-Server routines BUG!!!"</a>
<li><strong>Reply:</strong> <a href="1052.php">Renato Golin: "Re: [OMPI devel] R: Re: MPI2 Client-Server routines BUG!!!"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
But sorry why in the homepage is written:
<br>
<p>&quot;Features implemented or in 
<br>
short-term development for Open MPI include:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Full MPI-2 standards 
<br>
conformance 
<br>
&quot;
<br>
<p>&quot;short-term&quot; not scheduled? the Client-Server is the 
<br>
most innovative spawning method in MPI2, and this is not very good that 
<br>
OpenMPI don't have it if it wants become the &quot;BEST&quot; MPI2 distribuition 
<br>
today available, for this moment MPICH2 and LAM are the best for 
<br>
stability and functionality!
<br>
<p>Bye
<br>
<p><p><p><span class="quotelev1">&gt;----Messaggio originale----
</span><br>
<span class="quotelev1">&gt;Da: 
</span><br>
rhc_at_[hidden]
<br>
<span class="quotelev1">&gt;Data: 7-set-2006 11.25 PM
</span><br>
<span class="quotelev1">&gt;A: &quot;Open MPI Developers&quot;
</span><br>
&lt;devel_at_[hidden]&gt;
<br>
<span class="quotelev1">&gt;Ogg: Re: [OMPI devel] MPI2 Client-Server routines 
</span><br>
BUG!!!
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On 9/7/06 3:12 PM, &quot;Eng. A.A. Isola&quot; &lt;alfonso.isola_at_tin.
</span><br>
it&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Second, you can not use right now 
</span><br>
MPI_Publish_name/MPI_Lookup_name
<br>
<span class="quotelev3">&gt;&gt;&gt; accross multiple jobs, this is 
</span><br>
unfortunatly a known bug.
<br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ohhhhh 
</span><br>
<span class="quotelev2">&gt;&gt; noooooo!!!
</span><br>
<span class="quotelev2">&gt;&gt; This is a 
</span><br>
tremendous news1 for me!!
<br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; But when you will
</span><br>
<span class="quotelev2">&gt;&gt; resolve this 
</span><br>
problem???
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;We don't have a schedule yet for resolving this - we have 
</span><br>
some preliminary
<br>
<span class="quotelev1">&gt;fixes in place in a prototype system, but we aren't 
</span><br>
certain when those will
<br>
<span class="quotelev1">&gt;move to the public release.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Then the 
</span><br>
unique way is to use the
<br>
<span class="quotelev2">&gt;&gt; accept/connect routines with orte 
</span><br>
daemon....
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;At the moment, that *should* work - however, it has not 
</span><br>
been fully tested as
<br>
<span class="quotelev1">&gt;the system evolves. Hopefully, it will help for 
</span><br>
now.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel 
</span><br>
mailing list
<br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi">http://www.open-mpi</a>.
</span><br>
org/mailman/listinfo.cgi/devel
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1051.php">Pak Lui: "Re: [OMPI devel] MPI2 Client-Server routines OpenMPI BUG!!!"</a>
<li><strong>Previous message:</strong> <a href="1049.php">Ralph Castain: "Re: [OMPI devel] MPI2 Client-Server routines BUG!!!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1052.php">Renato Golin: "Re: [OMPI devel] R: Re: MPI2 Client-Server routines BUG!!!"</a>
<li><strong>Reply:</strong> <a href="1052.php">Renato Golin: "Re: [OMPI devel] R: Re: MPI2 Client-Server routines BUG!!!"</a>
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
