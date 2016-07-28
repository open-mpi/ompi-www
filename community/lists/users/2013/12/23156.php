<?
$subject_val = "Re: [OMPI users] can you help me please ?thanks";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  5 05:52:26 2013" -->
<!-- isoreceived="20131205105226" -->
<!-- sent="Thu, 5 Dec 2013 02:52:25 -0800" -->
<!-- isosent="20131205105225" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] can you help me please ?thanks" -->
<!-- id="CAMD57oefsdr3bF+07ymkwaVTv9MDYdEsNQofZ2dqu7YukMTrKA_at_mail.gmail.com" -->
<!-- charset="GB2312" -->
<!-- inreplyto="tencent_44573F8959DCA73934E72A1C_at_qq.com" -->
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
<strong>Date:</strong> 2013-12-05 05:52:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23157.php">ºúÑî: "[OMPI users] &#187;&#216;&#184;&#180;&#163;&#186;  can you help me please ?thanks"</a>
<li><strong>Previous message:</strong> <a href="23155.php">&#186;&#250;&#209;&#238;: "[OMPI users] can you help me please ?thanks"</a>
<li><strong>In reply to:</strong> <a href="23155.php">&#186;&#250;&#209;&#238;: "[OMPI users] can you help me please ?thanks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23157.php">ºúÑî: "[OMPI users] &#187;&#216;&#184;&#180;&#163;&#186;  can you help me please ?thanks"</a>
<li><strong>Reply:</strong> <a href="23157.php">ºúÑî: "[OMPI users] &#187;&#216;&#184;&#180;&#163;&#186;  can you help me please ?thanks"</a>
<li><strong>Reply:</strong> <a href="23159.php">ºúÑî: "[OMPI users] &#187;&#216;&#184;&#180;&#163;&#186;  can you help me please ?thanks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You are running 15000 ranks on two nodes?? My best guess is that you are
<br>
swapping like crazy as your memory footprint problem exceeds available
<br>
physical memory.
<br>
<p><p><p>On Thu, Dec 5, 2013 at 1:04 AM, &#186;&#250;&#209;&#238; &lt;781578278_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; My ROCKS cluster includes one frontend and two  compute nodes.In my
</span><br>
<span class="quotelev1">&gt; program,I have use the openmpi API  such as  MPI_Send and  MPI_Recv .  but
</span><br>
<span class="quotelev1">&gt; when I  run  the progam with 3 processors . one processor  send a message
</span><br>
<span class="quotelev1">&gt; ,other receive message .here are some code.
</span><br>
<span class="quotelev1">&gt; int*a=(int*)malloc(sizeof(int)*number);
</span><br>
<span class="quotelev1">&gt; MPI_Send(a,number, MPI_INT, 1, 1,MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  int*b=(int*)malloc(sizeof(int)*number);
</span><br>
<span class="quotelev1">&gt; MPI_Recv(b, number, MPI_INT, 0, MPI_ANY_TAG, MPI_COMM_WORLD, &amp;status);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; when number is least than 10000,it runs fast.
</span><br>
<span class="quotelev1">&gt; but number is more than 15000,it runs slowly
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; why??  becesue openmpi API ?? or other  problems?
</span><br>
<span class="quotelev1">&gt; ------------------ &#212;&#173;&#202;&#188;&#211;&#202;&#188;&#254; ------------------
</span><br>
<span class="quotelev1">&gt;  *&#183;&#162;&#188;&#254;&#200;&#203;:* &quot;Ralph Castain&quot;;&lt;rhc_at_[hidden]&gt;;
</span><br>
<span class="quotelev1">&gt; *&#183;&#162;&#203;&#205;&#202;&#177;&#188;&#228;:* 2013&#196;&#234;12&#212;&#194;3&#200;&#213;(&#208;&#199;&#198;&#218;&#182;&#254;) &#214;&#208;&#206;&#231;1:39
</span><br>
<span class="quotelev1">&gt; *&#202;&#213;&#188;&#254;&#200;&#203;:* &quot;Open MPI Users&quot;&lt;users_at_[hidden]&gt;;
</span><br>
<span class="quotelev1">&gt;  *&#214;&#247;&#204;&#226;:* Re: [OMPI users] can you help me please ?thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Dec 2, 2013 at 9:23 PM, &#186;&#250;&#209;&#238; &lt;781578278_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; A simple program at my 4-node ROCKS cluster runs fine with command:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /opt/openmpi/bin/mpirun -np 4 -machinefile machines ./sort_mpi6
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Another bigger programs runs fine on the head node only with command:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; cd ./sphere; /opt/openmpi/bin/mpirun -np 4 ../bin/sort_mpi6
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But with the command:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; cd /sphere; /opt/openmpi/bin/mpirun -np 4 -machinefile ../machines
</span><br>
<span class="quotelev2">&gt;&gt; ../bin/sort_mpi6
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It gives output that:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ../bin/sort_mpi6: error while loading shared libraries: libgdal.so.1:
</span><br>
<span class="quotelev2">&gt;&gt; cannot open
</span><br>
<span class="quotelev2">&gt;&gt; shared object file: No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt; ../bin/sort_mpi6: error while loading shared libraries: libgdal.so.1:
</span><br>
<span class="quotelev2">&gt;&gt; cannot open
</span><br>
<span class="quotelev2">&gt;&gt; shared object file: No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt; ../bin/sort_mpi6: error while loading shared libraries: libgdal.so.1:
</span><br>
<span class="quotelev2">&gt;&gt; cannot open
</span><br>
<span class="quotelev2">&gt;&gt; shared object file: No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23156/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23157.php">ºúÑî: "[OMPI users] &#187;&#216;&#184;&#180;&#163;&#186;  can you help me please ?thanks"</a>
<li><strong>Previous message:</strong> <a href="23155.php">&#186;&#250;&#209;&#238;: "[OMPI users] can you help me please ?thanks"</a>
<li><strong>In reply to:</strong> <a href="23155.php">&#186;&#250;&#209;&#238;: "[OMPI users] can you help me please ?thanks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23157.php">ºúÑî: "[OMPI users] &#187;&#216;&#184;&#180;&#163;&#186;  can you help me please ?thanks"</a>
<li><strong>Reply:</strong> <a href="23157.php">ºúÑî: "[OMPI users] &#187;&#216;&#184;&#180;&#163;&#186;  can you help me please ?thanks"</a>
<li><strong>Reply:</strong> <a href="23159.php">ºúÑî: "[OMPI users] &#187;&#216;&#184;&#180;&#163;&#186;  can you help me please ?thanks"</a>
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
