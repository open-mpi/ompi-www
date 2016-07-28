<?
$subject_val = "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 22 16:12:29 2011" -->
<!-- isoreceived="20110922201229" -->
<!-- sent="Fri, 23 Sep 2011 01:47:28 +0530" -->
<!-- isosent="20110922201728" -->
<!-- name="Uday Kumar Reddy B" -->
<!-- email="udayreddy_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi -cc=&amp;lt;compiler name&amp;gt; option" -->
<!-- id="4E7B97D8.5080209_at_gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9D2A8665-F20A-40B0-A9DD-24C93897DB1C_at_open-mpi.org" -->
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
<strong>Date:</strong> 2011-09-22 16:17:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17395.php">Ralph Castain: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<li><strong>Previous message:</strong> <a href="17393.php">Ralph Castain: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<li><strong>In reply to:</strong> <a href="17393.php">Ralph Castain: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17395.php">Ralph Castain: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<li><strong>Reply:</strong> <a href="17395.php">Ralph Castain: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<li><strong>Reply:</strong> <a href="17396.php">Jeff Squyres: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 09/23/2011 01:33 AM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Ummm...yes, because you are getting the man page for the MPICH mpicc, not ours. Try setting your manpage path to point to the OMPI install directory.
</span><br>
<p>Yes, but I can't find anything about -cc in openmpi's mpicc man page. 
<br>
So, -cc should either not be supported or work as per mpich's mpicc if 
<br>
you are wrapping around it.
<br>
<p>Thanks,
<br>
<p>-- Uday
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 22, 2011, at 1:55 PM, Uday Kumar Reddy B wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Sep 23, 2011 at 1:21 AM, Jeff Squyres&lt;jsquyres_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Right: -cc is not an option to Open MPI's mpicc wrapper compiler (I don't think it ever has been).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But that's not what the manual says ('man mpicc').
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------
</span><br>
<span class="quotelev2">&gt;&gt; COMMAND LINE ARGUMENTS
</span><br>
<span class="quotelev2">&gt;&gt;        -show  - Show the commands that would be used without runnning them
</span><br>
<span class="quotelev2">&gt;&gt;        -help  - Give short help
</span><br>
<span class="quotelev2">&gt;&gt;        -cc=name
</span><br>
<span class="quotelev2">&gt;&gt;               -  Use  compiler name instead of the default choice.
</span><br>
<span class="quotelev2">&gt;&gt; Use this only if the compiler is compatible
</span><br>
<span class="quotelev2">&gt;&gt;               with the MPICH library (see below)
</span><br>
<span class="quotelev2">&gt;&gt; ---------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- Uday
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; See <a href="http://www.open-mpi.org/faq/?category=mpi-apps#cant-use-wrappers">http://www.open-mpi.org/faq/?category=mpi-apps#cant-use-wrappers</a> and <a href="http://www.open-mpi.org/faq/?category=mpi-apps#override-wrappers-after-v1.0">http://www.open-mpi.org/faq/?category=mpi-apps#override-wrappers-after-v1.0</a>.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sep 22, 2011, at 3:44 PM, Uday Kumar Reddy B wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have openmpi via the distribution package: openmpi-1.4.3-7.fc14.i686
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; When attempting to make mpicc use another compiler as follows:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpicc -cc=icc ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I get
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; gcc: unrecognized option '-cc=icc'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /tmp/ccHd339C.o: In function `main':
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It looks like it's just passing this as option to gcc instead of using
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the supplied compiler.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- Uday
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<li><strong>Next message:</strong> <a href="17395.php">Ralph Castain: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<li><strong>Previous message:</strong> <a href="17393.php">Ralph Castain: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<li><strong>In reply to:</strong> <a href="17393.php">Ralph Castain: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17395.php">Ralph Castain: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<li><strong>Reply:</strong> <a href="17395.php">Ralph Castain: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<li><strong>Reply:</strong> <a href="17396.php">Jeff Squyres: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
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
