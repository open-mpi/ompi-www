<?
$subject_val = "Re: [OMPI users] &#187;&#216;&#184;&#180;&#163;&#186; can you help me please ?thanks";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  6 10:15:17 2013" -->
<!-- isoreceived="20131206151517" -->
<!-- sent="Fri, 6 Dec 2013 13:14:56 -0200" -->
<!-- isosent="20131206151456" -->
<!-- name="Bruno Coutinho" -->
<!-- email="coutinho_at_[hidden]" -->
<!-- subject="Re: [OMPI users] &amp;#187;&amp;#216;&amp;#184;&amp;#180;&amp;#163;&amp;#186; can you help me please ?thanks" -->
<!-- id="CAEZCQ7YrH2SA-_k4FRvYjmOdUyarbgQL8yN5sfmrwPfOnJ0PfQ_at_mail.gmail.com" -->
<!-- charset="GB2312" -->
<!-- inreplyto="1219551B-307C-432D-9B48-8EBA8D577ECA_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] &#187;&#216;&#184;&#180;&#163;&#186; can you help me please ?thanks<br>
<strong>From:</strong> Bruno Coutinho (<em>coutinho_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-06 10:14:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23162.php">Meredith, Karl: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<li><strong>Previous message:</strong> <a href="23160.php">Jeff Squyres (jsquyres): "Re: [OMPI users] &#187;&#216;&#184;&#180;&#163;&#186;  can you help me please ?thanks"</a>
<li><strong>In reply to:</strong> <a href="23160.php">Jeff Squyres (jsquyres): "Re: [OMPI users] &#187;&#216;&#184;&#180;&#163;&#186;  can you help me please ?thanks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23166.php">ºúÑî: "[OMPI users] &#187;&#216;&#184;&#180;&#163;&#186; &#187;&#216;&#184;&#180;&#163;&#186; can you help me please ?thanks"</a>
<li><strong>Reply:</strong> <a href="23166.php">ºúÑî: "[OMPI users] &#187;&#216;&#184;&#180;&#163;&#186; &#187;&#216;&#184;&#180;&#163;&#186; can you help me please ?thanks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Probably it was the changing from eager to rendezvous protocols as Jeff
<br>
said.
<br>
<p>If you don't know what are these, read this:
<br>
<a href="https://computing.llnl.gov/tutorials/mpi_performance/#Protocols">https://computing.llnl.gov/tutorials/mpi_performance/#Protocols</a>
<br>
<a href="http://blogs.cisco.com/performance/what-is-an-mpi-eager-limit/">http://blogs.cisco.com/performance/what-is-an-mpi-eager-limit/</a>
<br>
<a href="http://blogs.cisco.com/performance/eager-limits-part-2/">http://blogs.cisco.com/performance/eager-limits-part-2/</a>
<br>
<p>You can tune eager limit chaning mca parameters btl_tcp_eager_limit (for
<br>
tcp), btl_self_eager_limit (comunication fron one process to itself),
<br>
btl_sm_eager_limit (shared memory) and btl_udapl_eager_limit or
<br>
btl_openib_eager_limit (if you use infiniband).
<br>
<p><p>2013/12/6 Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; I sent you some further questions yesterday:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/users/2013/12/23158.php">http://www.open-mpi.org/community/lists/users/2013/12/23158.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 6, 2013, at 1:35 AM, &#186;&#250;&#209;&#238; &lt;781578278_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Here is  my code:
</span><br>
<span class="quotelev2">&gt; &gt; int*a=(int*)malloc(sizeof(int)*number);
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Send(a,number, MPI_INT, 1, 1,MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; int*b=(int*)malloc(sizeof(int)*number);
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Recv(b, number, MPI_INT, 0, MPI_ANY_TAG, MPI_COMM_WORLD, &amp;status);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; number  here is the size of my array(eg,a or b).
</span><br>
<span class="quotelev2">&gt; &gt; I  have try it on my local compute and my rocks cluster.On rocks
</span><br>
<span class="quotelev1">&gt; cluster, one processor  on  one frontend node  use &quot;MPI_Send&quot; send a
</span><br>
<span class="quotelev1">&gt; message ,other processors on compute nodes use &quot;MPI_Recv&quot; receive message .
</span><br>
<span class="quotelev2">&gt; &gt; when number is least than 10000,other processors can receive message
</span><br>
<span class="quotelev1">&gt; fast;
</span><br>
<span class="quotelev2">&gt; &gt; but when  number is more than 15000,other processors can receive message
</span><br>
<span class="quotelev1">&gt; slowly
</span><br>
<span class="quotelev2">&gt; &gt; why??  becesue openmpi API ?? or other  problems?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; it spends me a few days , I want your help,thanks for all readers. good
</span><br>
<span class="quotelev1">&gt; luck for you
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ------------------ &#212;&#173;&#202;&#188;&#211;&#202;&#188;&#254; ------------------
</span><br>
<span class="quotelev2">&gt; &gt; &#183;&#162;&#188;&#254;&#200;&#203;: &quot;Ralph Castain&quot;;&lt;rhc_at_[hidden]&gt;;
</span><br>
<span class="quotelev2">&gt; &gt; &#183;&#162;&#203;&#205;&#202;&#177;&#188;&#228;: 2013&#196;&#234;12&#212;&#194;5&#200;&#213;(&#208;&#199;&#198;&#218;&#203;&#196;) &#205;&#237;&#201;&#207;6:52
</span><br>
<span class="quotelev2">&gt; &gt; &#202;&#213;&#188;&#254;&#200;&#203;: &quot;Open MPI Users&quot;&lt;users_at_[hidden]&gt;;
</span><br>
<span class="quotelev2">&gt; &gt; &#214;&#247;&#204;&#226;: Re: [OMPI users] can you help me please ?thanks
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; You are running 15000 ranks on two nodes?? My best guess is that you are
</span><br>
<span class="quotelev1">&gt; swapping like crazy as your memory footprint problem exceeds available
</span><br>
<span class="quotelev1">&gt; physical memory.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Thu, Dec 5, 2013 at 1:04 AM, &#186;&#250;&#209;&#238; &lt;781578278_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; My ROCKS cluster includes one frontend and two  compute nodes.In my
</span><br>
<span class="quotelev1">&gt; program,I have use the openmpi API  such as  MPI_Send and  MPI_Recv .  but
</span><br>
<span class="quotelev1">&gt;  when I  run  the progam with 3 processors . one processor  send a message
</span><br>
<span class="quotelev1">&gt; ,other receive message .here are some code.
</span><br>
<span class="quotelev2">&gt; &gt; int*a=(int*)malloc(sizeof(int)*number);
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Send(a,number, MPI_INT, 1, 1,MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; int*b=(int*)malloc(sizeof(int)*number);
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Recv(b, number, MPI_INT, 0, MPI_ANY_TAG, MPI_COMM_WORLD, &amp;status);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; when number is least than 10000,it runs fast.
</span><br>
<span class="quotelev2">&gt; &gt; but number is more than 15000,it runs slowly
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; why??  becesue openmpi API ?? or other  problems?
</span><br>
<span class="quotelev2">&gt; &gt; ------------------ &#212;&#173;&#202;&#188;&#211;&#202;&#188;&#254; ------------------
</span><br>
<span class="quotelev2">&gt; &gt; &#183;&#162;&#188;&#254;&#200;&#203;: &quot;Ralph Castain&quot;;&lt;rhc_at_[hidden]&gt;;
</span><br>
<span class="quotelev2">&gt; &gt; &#183;&#162;&#203;&#205;&#202;&#177;&#188;&#228;: 2013&#196;&#234;12&#212;&#194;3&#200;&#213;(&#208;&#199;&#198;&#218;&#182;&#254;) &#214;&#208;&#206;&#231;1:39
</span><br>
<span class="quotelev2">&gt; &gt; &#202;&#213;&#188;&#254;&#200;&#203;: &quot;Open MPI Users&quot;&lt;users_at_[hidden]&gt;;
</span><br>
<span class="quotelev2">&gt; &gt; &#214;&#247;&#204;&#226;: Re: [OMPI users] can you help me please ?thanks
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Mon, Dec 2, 2013 at 9:23 PM, &#186;&#250;&#209;&#238; &lt;781578278_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; A simple program at my 4-node ROCKS cluster runs fine with command:
</span><br>
<span class="quotelev2">&gt; &gt; /opt/openmpi/bin/mpirun -np 4 -machinefile machines ./sort_mpi6
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Another bigger programs runs fine on the head node only with command:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; cd ./sphere; /opt/openmpi/bin/mpirun -np 4 ../bin/sort_mpi6
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; But with the command:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; cd /sphere; /opt/openmpi/bin/mpirun -np 4 -machinefile ../machines
</span><br>
<span class="quotelev2">&gt; &gt; ../bin/sort_mpi6
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; It gives output that:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ../bin/sort_mpi6: error while loading shared libraries: libgdal.so.1:
</span><br>
<span class="quotelev1">&gt; cannot open
</span><br>
<span class="quotelev2">&gt; &gt; shared object file: No such file or directory
</span><br>
<span class="quotelev2">&gt; &gt; ../bin/sort_mpi6: error while loading shared libraries: libgdal.so.1:
</span><br>
<span class="quotelev1">&gt; cannot open
</span><br>
<span class="quotelev2">&gt; &gt; shared object file: No such file or directory
</span><br>
<span class="quotelev2">&gt; &gt; ../bin/sort_mpi6: error while loading shared libraries: libgdal.so.1:
</span><br>
<span class="quotelev1">&gt; cannot open
</span><br>
<span class="quotelev2">&gt; &gt; shared object file: No such file or directory
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23161/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23162.php">Meredith, Karl: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<li><strong>Previous message:</strong> <a href="23160.php">Jeff Squyres (jsquyres): "Re: [OMPI users] &#187;&#216;&#184;&#180;&#163;&#186;  can you help me please ?thanks"</a>
<li><strong>In reply to:</strong> <a href="23160.php">Jeff Squyres (jsquyres): "Re: [OMPI users] &#187;&#216;&#184;&#180;&#163;&#186;  can you help me please ?thanks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23166.php">ºúÑî: "[OMPI users] &#187;&#216;&#184;&#180;&#163;&#186; &#187;&#216;&#184;&#180;&#163;&#186; can you help me please ?thanks"</a>
<li><strong>Reply:</strong> <a href="23166.php">ºúÑî: "[OMPI users] &#187;&#216;&#184;&#180;&#163;&#186; &#187;&#216;&#184;&#180;&#163;&#186; can you help me please ?thanks"</a>
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
