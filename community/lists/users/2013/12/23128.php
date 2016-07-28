<?
$subject_val = "Re: [OMPI users] can you help me please ?thanks";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  3 00:39:19 2013" -->
<!-- isoreceived="20131203053919" -->
<!-- sent="Mon, 2 Dec 2013 21:39:18 -0800" -->
<!-- isosent="20131203053918" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] can you help me please ?thanks" -->
<!-- id="CAMD57oem4xwRAE23REZPCsxn2ehzZB+dppE0_ShL_EDahjTUeQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="tencent_14E1C2571FD810151CBC8DA6_at_qq.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] can you help me please ?thanks<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-03 00:39:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23129.php">ºúÑî: "[OMPI users] &#187;&#216;&#184;&#180;&#163;&#186;  can you help me please ?thanks"</a>
<li><strong>Previous message:</strong> <a href="23127.php">&#186;&#250;&#209;&#238;: "[OMPI users] can you help me please ?thanks"</a>
<li><strong>In reply to:</strong> <a href="23127.php">&#186;&#250;&#209;&#238;: "[OMPI users] can you help me please ?thanks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23129.php">ºúÑî: "[OMPI users] &#187;&#216;&#184;&#180;&#163;&#186;  can you help me please ?thanks"</a>
<li><strong>Reply:</strong> <a href="23129.php">ºúÑî: "[OMPI users] &#187;&#216;&#184;&#180;&#163;&#186;  can you help me please ?thanks"</a>
<li><strong>Reply:</strong> <a href="23155.php">ºúÑî: "[OMPI users] can you help me please ?thanks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Check that your LD_LIBRARY_PATH is getting set properly on your remote node
<br>
- it likely is missing the path to this libgdal. You might need to add the
<br>
path to your default shell profile (e.g., .bashrc)
<br>
<p><p><p>On Mon, Dec 2, 2013 at 9:23 PM, &#232;&#131;&#161;&#230;&#157;&#168; &lt;781578278_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; A simple program at my 4-node ROCKS cluster runs fine with command:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/bin/mpirun -np 4 -machinefile machines ./sort_mpi6
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Another bigger programs runs fine on the head node only with command:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cd ./sphere; /opt/openmpi/bin/mpirun -np 4 ../bin/sort_mpi6
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But with the command:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cd /sphere; /opt/openmpi/bin/mpirun -np 4 -machinefile ../machines
</span><br>
<span class="quotelev1">&gt; ../bin/sort_mpi6
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It gives output that:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ../bin/sort_mpi6: error while loading shared libraries: libgdal.so.1:
</span><br>
<span class="quotelev1">&gt; cannot open
</span><br>
<span class="quotelev1">&gt; shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt; ../bin/sort_mpi6: error while loading shared libraries: libgdal.so.1:
</span><br>
<span class="quotelev1">&gt; cannot open
</span><br>
<span class="quotelev1">&gt; shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt; ../bin/sort_mpi6: error while loading shared libraries: libgdal.so.1:
</span><br>
<span class="quotelev1">&gt; cannot open
</span><br>
<span class="quotelev1">&gt; shared object file: No such file or directory
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23128/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23129.php">ºúÑî: "[OMPI users] &#187;&#216;&#184;&#180;&#163;&#186;  can you help me please ?thanks"</a>
<li><strong>Previous message:</strong> <a href="23127.php">&#186;&#250;&#209;&#238;: "[OMPI users] can you help me please ?thanks"</a>
<li><strong>In reply to:</strong> <a href="23127.php">&#186;&#250;&#209;&#238;: "[OMPI users] can you help me please ?thanks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23129.php">ºúÑî: "[OMPI users] &#187;&#216;&#184;&#180;&#163;&#186;  can you help me please ?thanks"</a>
<li><strong>Reply:</strong> <a href="23129.php">ºúÑî: "[OMPI users] &#187;&#216;&#184;&#180;&#163;&#186;  can you help me please ?thanks"</a>
<li><strong>Reply:</strong> <a href="23155.php">ºúÑî: "[OMPI users] can you help me please ?thanks"</a>
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
