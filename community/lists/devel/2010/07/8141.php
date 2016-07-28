<?
$subject_val = "Re: [OMPI devel] How to disable paffinity";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  5 23:57:05 2010" -->
<!-- isoreceived="20100706035705" -->
<!-- sent="Mon, 5 Jul 2010 21:56:53 -0600" -->
<!-- isosent="20100706035653" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] How to disable paffinity" -->
<!-- id="A58B1077-1B6E-48B6-BB38-A89B3467FB7E_at_open-mpi.org" -->
<!-- charset="GB2312" -->
<!-- inreplyto="AANLkTilaG7PFFi0DpnDUVx6hElMeCfruMOPNVynBNg-4_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] How to disable paffinity<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-05 23:56:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8142.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI devel] v1.5: thumbs up or down? - Thumbs Down"</a>
<li><strong>Previous message:</strong> <a href="8140.php">Nysal Jan: "Re: [OMPI devel] How to disable paffinity"</a>
<li><strong>In reply to:</strong> <a href="8138.php">&#213;&#197;&#190;&#167;: "Re: [OMPI devel] How to disable paffinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8146.php">张晶: "Re: [OMPI devel] How to disable paffinity"</a>
<li><strong>Reply:</strong> <a href="8146.php">张晶: "Re: [OMPI devel] How to disable paffinity"</a>
<li><strong>Reply:</strong> <a href="8147.php">张晶: "Re: [OMPI devel] How to disable paffinity"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
According to the vxworks docs, they created a notion of &quot;process&quot; statin with the 6.0 release. Use rtpSpawn to launch the process and you should be okay as that is the equivalent of fork/exec.
<br>
<p><p>On Jul 5, 2010, at 8:12 PM, &#213;&#197;&#190;&#167; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph ,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It is really a bad news that vxworks even doesn't include rsh server. I have to write a plm component using rlogin. After going through the openmpi website ,I can only find the some useful slides,However it is really not enough . I wonder if there is a document like  &quot;how to write a component&quot;.Thank you !
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &#212;&#218; 2010&#196;&#234;7&#212;&#194;2&#200;&#213; &#201;&#207;&#206;&#231;11:39&#163;&#172;Ralph Castain &lt;rhc_at_[hidden]&gt;&#208;&#180;&#181;&#192;&#163;&#186;
</span><br>
<span class="quotelev1">&gt; The rsh component checks for the existence of &quot;fork&quot;, which may not be present in vxworks. Is it? I'm afraid that component uses fork, so you may have to create a vxworks component that doesn't, or at least uses the equivalent.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 1, 2010, at 9:32 PM, &#213;&#197;&#190;&#167; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi Ralph,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I just copy your code in the trunk ,it seems working well. But the
</span><br>
<span class="quotelev2">&gt; &gt; &quot;mpirun ls &quot; still stuck at the orte_plm_select ,after using ompi_info
</span><br>
<span class="quotelev2">&gt; &gt; ,there is no available component for plm. I think my configure option
</span><br>
<span class="quotelev2">&gt; &gt; is not the problem, for I use the same configure option to build the
</span><br>
<span class="quotelev2">&gt; &gt; program under the linux ,the rsh &amp; slurm component are both available
</span><br>
<span class="quotelev2">&gt; &gt; . Maybe it is a problem of my enviroment , but I really don't know how
</span><br>
<span class="quotelev2">&gt; &gt; to find the condition to include rsh component.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2010/6/30 Ralph Castain &lt;rhc_at_[hidden]&gt;:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; You may be working off of an old version of OMPI - I updated opal_paffinity awhile ago to no longer require that a component be selected. Then you can no-build all paffinity components if you like and the system will still startup okay.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I don't believe this was moved over to the 1.4 release branch - afraid you would have to use a developer's trunk tarball or svn checkout. It -might- be in the 1.5.0 release candidates, though (I haven't looked).
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Jun 29, 2010, at 9:36 PM, &#213;&#197;&#190;&#167; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hi all ,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I tried to run the openmpi on vxworks. Now I can run program ompi_info
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; etc. But it failed running &quot;mpirun ls&quot;,  the error is :
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; It looks like opal_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; fail during opal_init; some of which are due to configuration or
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Open MPI developer):
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; opal_paffinity_base_select failed
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; --&gt; Returned value -13 instead of OPAL_SUCCESS
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; After using the ompi_info , I cann't find any available component for
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; paffinity. It seems the linux component of paffinity  isn't  available
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; . As the paffinity is not a must in openmpi . I wonder whether I can
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; disable the paffinity during the running of mpirun?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Jing Zhang
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; &#213;&#197;&#190;&#167;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; &#213;&#197;&#190;&#167;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8141/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8142.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI devel] v1.5: thumbs up or down? - Thumbs Down"</a>
<li><strong>Previous message:</strong> <a href="8140.php">Nysal Jan: "Re: [OMPI devel] How to disable paffinity"</a>
<li><strong>In reply to:</strong> <a href="8138.php">&#213;&#197;&#190;&#167;: "Re: [OMPI devel] How to disable paffinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8146.php">张晶: "Re: [OMPI devel] How to disable paffinity"</a>
<li><strong>Reply:</strong> <a href="8146.php">张晶: "Re: [OMPI devel] How to disable paffinity"</a>
<li><strong>Reply:</strong> <a href="8147.php">张晶: "Re: [OMPI devel] How to disable paffinity"</a>
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
