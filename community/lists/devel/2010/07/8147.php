<?
$subject_val = "Re: [OMPI devel] How to disable paffinity";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  7 03:32:14 2010" -->
<!-- isoreceived="20100707073214" -->
<!-- sent="Wed, 7 Jul 2010 15:32:09 +0800" -->
<!-- isosent="20100707073209" -->
<!-- name="&#213;&#197;&#190;&#167;" -->
<!-- email="iam.chilli_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] How to disable paffinity" -->
<!-- id="AANLkTim0JQToy_JYFVRSt1U9BV9K98u5EJiwXcow8qnV_at_mail.gmail.com" -->
<!-- charset="GB2312" -->
<!-- inreplyto="A58B1077-1B6E-48B6-BB38-A89B3467FB7E_at_open-mpi.org" -->
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
<strong>From:</strong> &#213;&#197;&#190;&#167; (<em>iam.chilli_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-07 03:32:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8148.php">Jeff Squyres: "Re: [OMPI devel] How to disable paffinity"</a>
<li><strong>Previous message:</strong> <a href="8146.php">&#213;&#197;&#190;&#167;: "Re: [OMPI devel] How to disable paffinity"</a>
<li><strong>In reply to:</strong> <a href="8141.php">Ralph Castain: "Re: [OMPI devel] How to disable paffinity"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all and ralph,
<br>
Going through the rsh component's launch job function , the daemon here
<br>
means the ssh session connecting to the nodes , I think this daemon is orted
<br>
, and in the orte_plm_base_launch_apps ,it use the selected odls component
<br>
to send command to the orted to spawn process. May what I understand is
<br>
right!
<br>
<p>&#212;&#218; 2010&#196;&#234;7&#212;&#194;6&#200;&#213; &#201;&#207;&#206;&#231;11:56&#163;&#172;Ralph Castain &lt;rhc_at_[hidden]&gt;&#208;&#180;&#181;&#192;&#163;&#186;
<br>
<p><span class="quotelev1">&gt; According to the vxworks docs, they created a notion of &quot;process&quot; statin
</span><br>
<span class="quotelev1">&gt; with the 6.0 release. Use rtpSpawn to launch the process and you should be
</span><br>
<span class="quotelev1">&gt; okay as that is the equivalent of fork/exec.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 5, 2010, at 8:12 PM, &#213;&#197;&#190;&#167; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Ralph ,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It is really a bad news that vxworks even doesn't include rsh server. I
</span><br>
<span class="quotelev1">&gt; have to write a plm component using rlogin. After going through the openmpi
</span><br>
<span class="quotelev1">&gt; website ,I can only find the some useful slides,However it is really not
</span><br>
<span class="quotelev1">&gt; enough . I wonder if there is a document like  &quot;how to write a
</span><br>
<span class="quotelev1">&gt; component&quot;.Thank you !
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#212;&#218; 2010&#196;&#234;7&#212;&#194;2&#200;&#213; &#201;&#207;&#206;&#231;11:39&#163;&#172;Ralph Castain &lt;rhc_at_[hidden]&gt;&#208;&#180;&#181;&#192;&#163;&#186;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The rsh component checks for the existence of &quot;fork&quot;, which may not be
</span><br>
<span class="quotelev2">&gt;&gt; present in vxworks. Is it? I'm afraid that component uses fork, so you may
</span><br>
<span class="quotelev2">&gt;&gt; have to create a vxworks component that doesn't, or at least uses the
</span><br>
<span class="quotelev2">&gt;&gt; equivalent.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 1, 2010, at 9:32 PM, &#213;&#197;&#190;&#167; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hi Ralph,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I just copy your code in the trunk ,it seems working well. But the
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &quot;mpirun ls &quot; still stuck at the orte_plm_select ,after using ompi_info
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ,there is no available component for plm. I think my configure option
</span><br>
<span class="quotelev3">&gt;&gt; &gt; is not the problem, for I use the same configure option to build the
</span><br>
<span class="quotelev3">&gt;&gt; &gt; program under the linux ,the rsh &amp; slurm component are both available
</span><br>
<span class="quotelev3">&gt;&gt; &gt; . Maybe it is a problem of my enviroment , but I really don't know how
</span><br>
<span class="quotelev3">&gt;&gt; &gt; to find the condition to include rsh component.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 2010/6/30 Ralph Castain &lt;rhc_at_[hidden]&gt;:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; You may be working off of an old version of OMPI - I updated
</span><br>
<span class="quotelev2">&gt;&gt; opal_paffinity awhile ago to no longer require that a component be selected.
</span><br>
<span class="quotelev2">&gt;&gt; Then you can no-build all paffinity components if you like and the system
</span><br>
<span class="quotelev2">&gt;&gt; will still startup okay.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; I don't believe this was moved over to the 1.4 release branch - afraid
</span><br>
<span class="quotelev2">&gt;&gt; you would have to use a developer's trunk tarball or svn checkout. It
</span><br>
<span class="quotelev2">&gt;&gt; -might- be in the 1.5.0 release candidates, though (I haven't looked).
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; On Jun 29, 2010, at 9:36 PM, &#213;&#197;&#190;&#167; wrote:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; Hi all ,
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; I tried to run the openmpi on vxworks. Now I can run program ompi_info
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; etc. But it failed running &quot;mpirun ls&quot;,  the error is :
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; It looks like opal_init failed for some reason; your parallel process
</span><br>
<span class="quotelev2">&gt;&gt; is
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; fail during opal_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; opal_paffinity_base_select failed
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; --&gt; Returned value -13 instead of OPAL_SUCCESS
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; After using the ompi_info , I cann't find any available component for
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; paffinity. It seems the linux component of paffinity  isn't  available
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; . As the paffinity is not a must in openmpi . I wonder whether I can
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; disable the paffinity during the running of mpirun?
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; Jing Zhang
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#213;&#197;&#190;&#167;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt;  _______________________________________________
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
<p><p><p><pre>
-- 
&#213;&#197;&#190;&#167;
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8147/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8148.php">Jeff Squyres: "Re: [OMPI devel] How to disable paffinity"</a>
<li><strong>Previous message:</strong> <a href="8146.php">&#213;&#197;&#190;&#167;: "Re: [OMPI devel] How to disable paffinity"</a>
<li><strong>In reply to:</strong> <a href="8141.php">Ralph Castain: "Re: [OMPI devel] How to disable paffinity"</a>
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
