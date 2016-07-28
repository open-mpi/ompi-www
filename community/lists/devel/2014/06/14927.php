<?
$subject_val = "Re: [OMPI devel] OpenIB/usNIC errors";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jun  1 08:33:36 2014" -->
<!-- isoreceived="20140601123336" -->
<!-- sent="Sun, 1 Jun 2014 19:33:35 +0700" -->
<!-- isosent="20140601123335" -->
<!-- name="Artem Polyakov" -->
<!-- email="artpol84_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenIB/usNIC errors" -->
<!-- id="CAJ2Qj5qJushbObPR4hXkp=+Dm3BFC+wBJ3K09xjRQvhn2Re40A_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="2818D7D3-5DBC-438A-AED4-151706BB4FFE_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OpenIB/usNIC errors<br>
<strong>From:</strong> Artem Polyakov (<em>artpol84_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-01 08:33:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14928.php">Artem Polyakov: "Re: [OMPI devel] OpenIB/usNIC errors"</a>
<li><strong>Previous message:</strong> <a href="14926.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OpenIB/usNIC errors"</a>
<li><strong>In reply to:</strong> <a href="14926.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OpenIB/usNIC errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14929.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OpenIB/usNIC errors"</a>
<li><strong>Reply:</strong> <a href="14929.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OpenIB/usNIC errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello, Jeff.
<br>
<p>Please, check attached tar (&quot;auto-failure&quot; dir). There I've seen the
<br>
following message:
<br>
--------------------------------------------------------------------------
<br>
<p><p>An internal error has occurred in the Open MPI usNIC BTL.  This is
<br>
highly unusual and shouldn't happen.  It suggests that there may be
<br>
something wrong with the usNIC or OpenFabrics configuration on this
<br>
server.
<br>
&nbsp;&nbsp;Server:       cn5
<br>
<p>Message:      usnic connectivity client IPC connect read failed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;File:
<br>
/home/research/artpol/ompi_dev//ompi-trunk_r31907/ompi/mca/btl/usnic/btl_usnic_cclient.c
<br>
<p>&nbsp;&nbsp;Line:         125
<br>
&nbsp;&nbsp;Error:        Operation not permitted
<br>
--------------------------------------------------------------------------
<br>
<p>And I was wondered because as I've said we don't use Cisco hardware. My
<br>
guess that it can be a problem in query function. But I think this shows
<br>
that usnic BTL somehow participates in computiation.
<br>
<p><p>2014-06-01 19:20 GMT+07:00 Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Just to be clear: it looks like you haven't seen any errors from the usnic
</span><br>
<span class="quotelev1">&gt; BTL, right?  (the Cisco VIC uses the usnic BTL only -- it does not use the
</span><br>
<span class="quotelev1">&gt; openib BTL)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 1, 2014, at 2:57 AM, Artem Polyakov &lt;artpol84_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hello, while testing new PMI implementation I faced a problem with
</span><br>
<span class="quotelev1">&gt; OpenIB and/or usNIC support.
</span><br>
<span class="quotelev2">&gt; &gt; The cluster I use is build on Mellanox QDR. We don't use Cisco hardware,
</span><br>
<span class="quotelev1">&gt; thus no Cisco Virtual Interface Card. To exclude possibility of new PMI
</span><br>
<span class="quotelev1">&gt; code influence I used mpirun to launch the job. Slurm job script is
</span><br>
<span class="quotelev1">&gt; attached.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; While investigating the problem I found the following:
</span><br>
<span class="quotelev2">&gt; &gt; 1. With TCP btl everything works without errors (add export
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_btl=&quot;tcp,self&quot; in attached batch script).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2. With fixed OpenIB  support  (add export OMPI_MCA_btl=&quot;openib,self&quot; in
</span><br>
<span class="quotelev1">&gt; attached batch script) I get followint error:
</span><br>
<span class="quotelev2">&gt; &gt; hellompi:
</span><br>
<span class="quotelev1">&gt; /home/research/artpol/ompi_dev//ompi-trunk_r31907/ompi/mca/btl/openib/btl_openib.c:1151:
</span><br>
<span class="quotelev1">&gt; mca_btl_openib_del_procs: Assertion
</span><br>
<span class="quotelev1">&gt; `((opal_object_t*)endpoint)-&gt;obj_reference_count == 1' failed.
</span><br>
<span class="quotelev2">&gt; &gt; hellompi:
</span><br>
<span class="quotelev1">&gt; /home/research/artpol/ompi_dev//ompi-trunk_r31907/ompi/mca/btl/openib/btl_openib.c:1151:
</span><br>
<span class="quotelev1">&gt; mca_btl_openib_del_procs: Assertion
</span><br>
<span class="quotelev1">&gt; `((opal_object_t*)endpoint)-&gt;obj_reference_count == 1' failed.
</span><br>
<span class="quotelev2">&gt; &gt; hellompi:
</span><br>
<span class="quotelev1">&gt; /home/research/artpol/ompi_dev//ompi-trunk_r31907/ompi/mca/btl/openib/btl_openib.c:1151:
</span><br>
<span class="quotelev1">&gt; mca_btl_openib_del_procs: Assertion
</span><br>
<span class="quotelev1">&gt; `((opal_object_t*)endpoint)-&gt;obj_reference_count == 1' failed.
</span><br>
<span class="quotelev2">&gt; &gt; hellompi:
</span><br>
<span class="quotelev1">&gt; /home/research/artpol/ompi_dev//ompi-trunk_r31907/ompi/mca/btl/openib/btl_openib.c:1151:
</span><br>
<span class="quotelev1">&gt; mca_btl_openib_del_procs: Assertion
</span><br>
<span class="quotelev1">&gt; `((opal_object_t*)endpoint)-&gt;obj_reference_count == 1' failed.
</span><br>
<span class="quotelev2">&gt; &gt; hellompi:
</span><br>
<span class="quotelev1">&gt; /home/research/artpol/ompi_dev//ompi-trunk_r31907/ompi/mca/btl/openib/btl_openib.c:1151:
</span><br>
<span class="quotelev1">&gt; mca_btl_openib_del_procs: Assertion
</span><br>
<span class="quotelev1">&gt; `((opal_object_t*)endpoint)-&gt;obj_reference_count == 1' failed.
</span><br>
<span class="quotelev2">&gt; &gt; hellompi:
</span><br>
<span class="quotelev1">&gt; /home/research/artpol/ompi_dev//ompi-trunk_r31907/ompi/mca/btl/openib/btl_openib.c:1151:
</span><br>
<span class="quotelev1">&gt; mca_btl_openib_del_procs: Assertion
</span><br>
<span class="quotelev1">&gt; `((opal_object_t*)endpoint)-&gt;obj_reference_count == 1' failed.
</span><br>
<span class="quotelev2">&gt; &gt; hellompi:
</span><br>
<span class="quotelev1">&gt; /home/research/artpol/ompi_dev//ompi-trunk_r31907/ompi/mca/btl/openib/btl_openib.c:1151:
</span><br>
<span class="quotelev1">&gt; mca_btl_openib_del_procs: Assertion
</span><br>
<span class="quotelev1">&gt; `((opal_object_t*)endpoint)-&gt;obj_reference_count == 1' failed.
</span><br>
<span class="quotelev2">&gt; &gt; hellompi:
</span><br>
<span class="quotelev1">&gt; /home/research/artpol/ompi_dev//ompi-trunk_r31907/ompi/mca/btl/openib/btl_openib.c:1151:
</span><br>
<span class="quotelev1">&gt; mca_btl_openib_del_procs: Assertion
</span><br>
<span class="quotelev1">&gt; `((opal_object_t*)endpoint)-&gt;obj_reference_count == 1' failed.
</span><br>
<span class="quotelev2">&gt; &gt; hellompi:
</span><br>
<span class="quotelev1">&gt; /home/research/artpol/ompi_dev//ompi-trunk_r31907/ompi/mca/btl/openib/btl_openib.c:1151:
</span><br>
<span class="quotelev1">&gt; mca_btl_openib_del_procs: Assertion
</span><br>
<span class="quotelev1">&gt; `((opal_object_t*)endpoint)-&gt;obj_reference_count == 1' failed.
</span><br>
<span class="quotelev2">&gt; &gt; hellompi:
</span><br>
<span class="quotelev1">&gt; /home/research/artpol/ompi_dev//ompi-trunk_r31907/ompi/mca/btl/openib/btl_openib.c:1151:
</span><br>
<span class="quotelev1">&gt; mca_btl_openib_del_procs: Assertion
</span><br>
<span class="quotelev1">&gt; `((opal_object_t*)endpoint)-&gt;obj_reference_count == 1' failed.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Complete logs are tar-ed, check &quot;openib-failure&quot; directory.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 3. If I do not fix the BTL component (no OMPI_MCA_btl is exported) I can
</span><br>
<span class="quotelev1">&gt; get either immediate fail talking about usNIC/OpenIB problems OR programs
</span><br>
<span class="quotelev1">&gt; hangs.
</span><br>
<span class="quotelev2">&gt; &gt; For both cases I'm attaching complete tar-ed logs. Check &quot;auto-failure&quot;
</span><br>
<span class="quotelev1">&gt; dir for ompi stdout and stderr and &quot;auto-hang&quot; for the hang case.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am ready to provide additional info or help with testing but I have no
</span><br>
<span class="quotelev1">&gt; time to track the problem myself in near several days.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; &#208;&#161; &#208;&#163;&#208;&#178;&#208;&#176;&#208;&#182;&#208;&#181;&#208;&#189;&#208;&#184;&#208;&#181;&#208;&#188;, &#208;&#159;&#208;&#190;&#208;&#187;&#209;&#143;&#208;&#186;&#208;&#190;&#208;&#178; &#208;&#144;&#209;&#128;&#209;&#130;&#208;&#181;&#208;&#188; &#208;&#174;&#209;&#128;&#209;&#140;&#208;&#181;&#208;&#178;&#208;&#184;&#209;&#135;
</span><br>
<span class="quotelev2">&gt; &gt; Best regards, Artem Y. Polyakov
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &lt;task_mpirun.job&gt;&lt;usnic-openib-faults.tar.bz2&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/06/14922.php">http://www.open-mpi.org/community/lists/devel/2014/06/14922.php</a>
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/06/14926.php">http://www.open-mpi.org/community/lists/devel/2014/06/14926.php</a>
</span><br>
<p><p><p><p><pre>
-- 
&#208;&#161; &#208;&#163;&#208;&#178;&#208;&#176;&#208;&#182;&#208;&#181;&#208;&#189;&#208;&#184;&#208;&#181;&#208;&#188;, &#208;&#159;&#208;&#190;&#208;&#187;&#209;&#143;&#208;&#186;&#208;&#190;&#208;&#178; &#208;&#144;&#209;&#128;&#209;&#130;&#208;&#181;&#208;&#188; &#208;&#174;&#209;&#128;&#209;&#140;&#208;&#181;&#208;&#178;&#208;&#184;&#209;&#135;
Best regards, Artem Y. Polyakov
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14927/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14928.php">Artem Polyakov: "Re: [OMPI devel] OpenIB/usNIC errors"</a>
<li><strong>Previous message:</strong> <a href="14926.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OpenIB/usNIC errors"</a>
<li><strong>In reply to:</strong> <a href="14926.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OpenIB/usNIC errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14929.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OpenIB/usNIC errors"</a>
<li><strong>Reply:</strong> <a href="14929.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OpenIB/usNIC errors"</a>
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
