<?
$subject_val = "Re: [OMPI users] Mac OS X Static PGI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 11 15:43:45 2011" -->
<!-- isoreceived="20110311204345" -->
<!-- sent="Fri, 11 Mar 2011 15:43:26 -0500" -->
<!-- isosent="20110311204326" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mac OS X Static PGI" -->
<!-- id="7CCE3085-8FD7-4316-9174-CA535E77E1D7_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="83FCAC9B-7C7B-447D-B868-0E1103EBA35C_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Mac OS X Static PGI<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-11 15:43:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15851.php">Ralph Castain: "Re: [OMPI users] Mac OS X Static PGI"</a>
<li><strong>Previous message:</strong> <a href="15849.php">Bernardo F Costa: "Re: [OMPI users] OpenMPI without IPoIB"</a>
<li><strong>In reply to:</strong> <a href="15793.php">Ralph Castain: "Re: [OMPI users] Mac OS X Static PGI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15851.php">Ralph Castain: "Re: [OMPI users] Mac OS X Static PGI"</a>
<li><strong>Reply:</strong> <a href="15851.php">Ralph Castain: "Re: [OMPI users] Mac OS X Static PGI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
David --
<br>
<p>If you can come up with a configure-esque test for detecting that we're on a system that has this bad condition, we can add an #if around the #include.
<br>
<p>For example, if you can write a short test that verifies that &lt;net/if.h&gt; is there, but it doesn't work, and further, if we're using the broken version of PGI on Mac OS X, then we can AC_DEFINE something to skip including that file in opal/util/if.h.
<br>
<p><p><p>On Mar 3, 2011, at 4:22 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Really appreciate you having looked into this!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Unfortunately, I can't see a way to resolve this for the general public. It looks more to me like a PGI bug, frankly - not supporting code in a system-level include makes no sense to me. But I confess this seems to be PGI's mode of operation as I've seen similar issues with their compilers under other OS's as well.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We obviously cannot replace Mac's if.h with the PGI-custom version, nor can we distribute the PGI-custom version for use in that situation. So until/unless PGI fixes their problem, I think this has to be a one-off solution.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Again, thanks for looking into it. Glad that it works for you!
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 3, 2011, at 1:28 PM, David Robertson wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; UPDATE:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Sorry for the delay but I wanted to make sure PGI was ok with me sharing their workaround.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Further conversation with PGI tech support has yielded a solution. The opal/util/if.c file has the following around line 63:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;net/if.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Here is the explanation I have from PGI:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;&lt;&lt;&lt;&lt; Start Quote
</span><br>
<span class="quotelev2">&gt;&gt; For 64-bit only there might be an issue of 'not running/crashing'
</span><br>
<span class="quotelev2">&gt;&gt; when it tries to establish the connection.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The reason is probably because a source file  includes &lt;net/if.h&gt;.
</span><br>
<span class="quotelev2">&gt;&gt; &lt;net/if.h&gt; has some source code that we don't support , namely
</span><br>
<span class="quotelev2">&gt;&gt; #pragma pack(4)
</span><br>
<span class="quotelev2">&gt;&gt; I think currently ignore it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The file is: opal/util/if.c  that  includes &lt;net/if.h&gt;.
</span><br>
<span class="quotelev2">&gt;&gt; You may succeed  by  including the  attached pgi.h instead of &lt;net/if.h&gt;.
</span><br>
<span class="quotelev2">&gt;&gt; End Quote &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I followed this advise along with editing the share/openmpi/mpif*-wrapper-data.txt files to have full paths to the static libraries instead of just -lmpi_f90, -lmpi_f77, -lmpi, etc.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Dave
</span><br>
<span class="quotelev2">&gt;&gt; &lt;pgi.h&gt;_______________________________________________
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15851.php">Ralph Castain: "Re: [OMPI users] Mac OS X Static PGI"</a>
<li><strong>Previous message:</strong> <a href="15849.php">Bernardo F Costa: "Re: [OMPI users] OpenMPI without IPoIB"</a>
<li><strong>In reply to:</strong> <a href="15793.php">Ralph Castain: "Re: [OMPI users] Mac OS X Static PGI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15851.php">Ralph Castain: "Re: [OMPI users] Mac OS X Static PGI"</a>
<li><strong>Reply:</strong> <a href="15851.php">Ralph Castain: "Re: [OMPI users] Mac OS X Static PGI"</a>
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
