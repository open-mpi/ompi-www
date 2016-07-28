<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Nov  4 09:52:50 2006" -->
<!-- isoreceived="20061104145250" -->
<!-- sent="Sat, 4 Nov 2006 20:22:39 +0530" -->
<!-- isosent="20061104145239" -->
<!-- name="Nysal Jan" -->
<!-- email="jnysal_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI between amd64 and x86" -->
<!-- id="5d5f7eba0611040652x60c304b5ic5af7e7d2ae3624f_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20061104122739.GM27827_at_drcomp.erfurt.thur.de" -->
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
<strong>From:</strong> Nysal Jan (<em>jnysal_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-04 09:52:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1163.php">Lisandro Dalcin: "[OMPI devel] Problems in Collectives+Intercomms"</a>
<li><strong>Previous message:</strong> <a href="1161.php">Adrian Knoth: "Re: [OMPI devel] MPI between amd64 and x86"</a>
<li><strong>In reply to:</strong> <a href="1161.php">Adrian Knoth: "Re: [OMPI devel] MPI between amd64 and x86"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have opened a ticket <a href="http://svn.open-mpi.org/trac/ompi/ticket/587">http://svn.open-mpi.org/trac/ompi/ticket/587</a>
<br>
<p>--Nysal
<br>
<p>On 11/4/06, Adrian Knoth &lt;adi_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sat, Nov 04, 2006 at 02:07:58PM +0530, Nysal Jan wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;come from the BTL headers where the fields do not have the same
</span><br>
<span class="quotelev3">&gt; &gt; &gt;alignment inside. The original question was asked by Nysal Jan on an
</span><br>
<span class="quotelev3">&gt; &gt; &gt;email with the subject &quot;SEGV in EM64T &lt;--&gt; PPC64 communication&quot; on
</span><br>
<span class="quotelev3">&gt; &gt; &gt;Oct. 11 2006. Unfortunately, we still have the same problem.
</span><br>
<span class="quotelev2">&gt; &gt; I'm forwarding that email. Further investigation showed that the same
</span><br>
<span class="quotelev2">&gt; &gt; issue exists with a few other ob1 headers as well. A 64-bit build
</span><br>
<span class="quotelev1">&gt; doesn't
</span><br>
<span class="quotelev2">&gt; &gt; have this problem. I'm not sure if this might be the same issue that you
</span><br>
<span class="quotelev2">&gt; &gt; are facing. You could test if the attached patch works for you (Although
</span><br>
<span class="quotelev2">&gt; &gt; this is not the right solution).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The attached patch solves my issue and I feel that it's right
</span><br>
<span class="quotelev1">&gt; the problem I was facing (I saw the hang in pml_ob1).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there already a ticket assigned for it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; mail: adi_at_[hidden]       <a href="http://adi.thur.de">http://adi.thur.de</a>      PGP: v2-key via keyserver
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mathematik ohne Axiome ist nicht mehr als hei&#223;e Luft. (Matthias Heidbrink)
</span><br>
<span class="quotelev1">&gt; Auch mit Axiomen ist Mathematik nicht mehr als hei&#223;e Luft. (Florian
</span><br>
<span class="quotelev1">&gt; Weimer)
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-1162/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1163.php">Lisandro Dalcin: "[OMPI devel] Problems in Collectives+Intercomms"</a>
<li><strong>Previous message:</strong> <a href="1161.php">Adrian Knoth: "Re: [OMPI devel] MPI between amd64 and x86"</a>
<li><strong>In reply to:</strong> <a href="1161.php">Adrian Knoth: "Re: [OMPI devel] MPI between amd64 and x86"</a>
<!-- nextthread="start" -->
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
