<?
$subject_val = "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 22 15:55:37 2011" -->
<!-- isoreceived="20110922195537" -->
<!-- sent="Fri, 23 Sep 2011 01:25:33 +0530" -->
<!-- isosent="20110922195533" -->
<!-- name="Uday Kumar Reddy B" -->
<!-- email="udayreddy_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi -cc=&amp;lt;compiler name&amp;gt; option" -->
<!-- id="CALA1MBK-z7zybG72=B+nMJnRSNJP439-ydHsC7tSS+UaVXQA6g_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9E013732-6A11-45AF-A6B1-41F54D73201B_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option<br>
<strong>From:</strong> Uday Kumar Reddy B (<em>udayreddy_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-22 15:55:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17393.php">Ralph Castain: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<li><strong>Previous message:</strong> <a href="17391.php">Jeff Squyres: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<li><strong>In reply to:</strong> <a href="17391.php">Jeff Squyres: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17393.php">Ralph Castain: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<li><strong>Reply:</strong> <a href="17393.php">Ralph Castain: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Sep 23, 2011 at 1:21 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Right: -cc is not an option to Open MPI's mpicc wrapper compiler (I don't think it ever has been).
</span><br>
<p>But that's not what the manual says ('man mpicc').
<br>
<p>--------------
<br>
COMMAND LINE ARGUMENTS
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-show  - Show the commands that would be used without runnning them
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-help  - Give short help
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-cc=name
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-  Use  compiler name instead of the default choice.
<br>
Use this only if the compiler is compatible
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;with the MPICH library (see below)
<br>
---------------
<br>
<p><p>-- Uday
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; See <a href="http://www.open-mpi.org/faq/?category=mpi-apps#cant-use-wrappers">http://www.open-mpi.org/faq/?category=mpi-apps#cant-use-wrappers</a> and <a href="http://www.open-mpi.org/faq/?category=mpi-apps#override-wrappers-after-v1.0">http://www.open-mpi.org/faq/?category=mpi-apps#override-wrappers-after-v1.0</a>.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 22, 2011, at 3:44 PM, Uday Kumar Reddy B wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have openmpi via the distribution package: openmpi-1.4.3-7.fc14.i686
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When attempting to make mpicc use another compiler as follows:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpicc -cc=icc ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I get
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; gcc: unrecognized option '-cc=icc'
</span><br>
<span class="quotelev2">&gt;&gt; /tmp/ccHd339C.o: In function `main':
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It looks like it's just passing this as option to gcc instead of using
</span><br>
<span class="quotelev2">&gt;&gt; the supplied compiler.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- Uday
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17393.php">Ralph Castain: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<li><strong>Previous message:</strong> <a href="17391.php">Jeff Squyres: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<li><strong>In reply to:</strong> <a href="17391.php">Jeff Squyres: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17393.php">Ralph Castain: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<li><strong>Reply:</strong> <a href="17393.php">Ralph Castain: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
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
