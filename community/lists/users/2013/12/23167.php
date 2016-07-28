<?
$subject_val = "Re: [OMPI users] &#229;&#155;&#158;&#229;&#164;&#141;&#239;&#188;&#154; &#229;&#155;&#158;&#229;&#164;&#141;&#239;&#188;&#154; can you help me please ?thanks";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  9 10:18:47 2013" -->
<!-- isoreceived="20131209151847" -->
<!-- sent="Mon, 9 Dec 2013 07:18:19 -0800" -->
<!-- isosent="20131209151819" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] &amp;#229;&amp;#155;&amp;#158;&amp;#229;&amp;#164;&amp;#141;&amp;#239;&amp;#188;&amp;#154; &amp;#229;&amp;#155;&amp;#158;&amp;#229;&amp;#164;&amp;#141;&amp;#239;&amp;#188;&amp;#154; can you help me please ?thanks" -->
<!-- id="6AC0523F-2DD0-44C8-921A-C4D19EC51A20_at_open-mpi.org" -->
<!-- charset="gb18030" -->
<!-- inreplyto="tencent_2E2AB6C13F91E91A28005EA1_at_qq.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] &#229;&#155;&#158;&#229;&#164;&#141;&#239;&#188;&#154; &#229;&#155;&#158;&#229;&#164;&#141;&#239;&#188;&#154; can you help me please ?thanks<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-09 10:18:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23168.php">ºúÑî: "[OMPI users] &#187;&#216;&#184;&#180;&#163;&#186; &#187;&#216;&#184;&#180;&#163;&#186; &#187;&#216;&#184;&#180;&#163;&#186; can you help me please ?thanks"</a>
<li><strong>Previous message:</strong> <a href="23166.php">&#186;&#250;&#209;&#238;: "[OMPI users] &#187;&#216;&#184;&#180;&#163;&#186; &#187;&#216;&#184;&#180;&#163;&#186; can you help me please ?thanks"</a>
<li><strong>In reply to:</strong> <a href="23166.php">&#186;&#250;&#209;&#238;: "[OMPI users] &#187;&#216;&#184;&#180;&#163;&#186; &#187;&#216;&#184;&#180;&#163;&#186; can you help me please ?thanks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23168.php">ºúÑî: "[OMPI users] &#187;&#216;&#184;&#180;&#163;&#186; &#187;&#216;&#184;&#180;&#163;&#186; &#187;&#216;&#184;&#180;&#163;&#186; can you help me please ?thanks"</a>
<li><strong>Reply:</strong> <a href="23168.php">ºúÑî: "[OMPI users] &#187;&#216;&#184;&#180;&#163;&#186; &#187;&#216;&#184;&#180;&#163;&#186; &#187;&#216;&#184;&#180;&#163;&#186; can you help me please ?thanks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Forgive me, but I have no idea what that output means. Why do you think only 3 processors are being used?
<br>
<p>On Dec 9, 2013, at 5:05 AM, &#186;&#250;&#209;&#238; &lt;781578278_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  I have a server  with  12 cores.when I run mpi program with 10 processors.only  three processors works.Here are a picture about the problem
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; &lt;40F6DC95_at_E690AF16.27C0A552.jpg&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; why?Is the problem with process schedule??   
</span><br>
<span class="quotelev1">&gt; ------------------ &#212;&#173;&#202;&#188;&#211;&#202;&#188;&#254; ------------------
</span><br>
<span class="quotelev1">&gt; &#183;&#162;&#188;&#254;&#200;&#203;: &quot;Bruno Coutinho&quot;;&lt;coutinho_at_[hidden]&gt;;
</span><br>
<span class="quotelev1">&gt; &#183;&#162;&#203;&#205;&#202;&#177;&#188;&#228;: 2013&#196;&#234;12&#212;&#194;6&#200;&#213;(&#208;&#199;&#198;&#218;&#206;&#229;) &#205;&#237;&#201;&#207;11:14
</span><br>
<span class="quotelev1">&gt; &#202;&#213;&#188;&#254;&#200;&#203;: &quot;Open MPI Users&quot;&lt;users_at_[hidden]&gt;;
</span><br>
<span class="quotelev1">&gt; &#214;&#247;&#204;&#226;: Re: [OMPI users]&#187;&#216;&#184;&#180;&#163;&#186; can you help me please ?thanks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Probably it was the changing from eager to rendezvous protocols as Jeff said.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you don't know what are these, read this:
</span><br>
<span class="quotelev1">&gt; <a href="https://computing.llnl.gov/tutorials/mpi_performance/#Protocols">https://computing.llnl.gov/tutorials/mpi_performance/#Protocols</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://blogs.cisco.com/performance/what-is-an-mpi-eager-limit/">http://blogs.cisco.com/performance/what-is-an-mpi-eager-limit/</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://blogs.cisco.com/performance/eager-limits-part-2/">http://blogs.cisco.com/performance/eager-limits-part-2/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You can tune eager limit chaning mca parameters btl_tcp_eager_limit (for tcp), btl_self_eager_limit (comunication fron one process to itself), btl_sm_eager_limit (shared memory) and btl_udapl_eager_limit or btl_openib_eager_limit (if you use infiniband).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2013/12/6 Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; I sent you some further questions yesterday:
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
<span class="quotelev2">&gt; &gt; I  have try it on my local compute and my rocks cluster.On rocks cluster, one processor  on  one frontend node  use &quot;MPI_Send&quot; send a message ,other processors on compute nodes use &quot;MPI_Recv&quot; receive message .
</span><br>
<span class="quotelev2">&gt; &gt; when number is least than 10000,other processors can receive message fast;
</span><br>
<span class="quotelev2">&gt; &gt; but when  number is more than 15000,other processors can receive message slowly
</span><br>
<span class="quotelev2">&gt; &gt; why??  becesue openmpi API ?? or other  problems?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; it spends me a few days , I want your help,thanks for all readers. good luck for you
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
<span class="quotelev2">&gt; &gt; You are running 15000 ranks on two nodes?? My best guess is that you are swapping like crazy as your memory footprint problem exceeds available physical memory.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Thu, Dec 5, 2013 at 1:04 AM, &#186;&#250;&#209;&#238; &lt;781578278_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; My ROCKS cluster includes one frontend and two  compute nodes.In my program,I have use the openmpi API  such as  MPI_Send and  MPI_Recv .  but  when I  run  the progam with 3 processors . one processor  send a message ,other receive message .here are some code.
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
<span class="quotelev2">&gt; &gt; ../bin/sort_mpi6: error while loading shared libraries: libgdal.so.1: cannot open
</span><br>
<span class="quotelev2">&gt; &gt; shared object file: No such file or directory
</span><br>
<span class="quotelev2">&gt; &gt; ../bin/sort_mpi6: error while loading shared libraries: libgdal.so.1: cannot open
</span><br>
<span class="quotelev2">&gt; &gt; shared object file: No such file or directory
</span><br>
<span class="quotelev2">&gt; &gt; ../bin/sort_mpi6: error while loading shared libraries: libgdal.so.1: cannot open
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
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23167/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23168.php">ºúÑî: "[OMPI users] &#187;&#216;&#184;&#180;&#163;&#186; &#187;&#216;&#184;&#180;&#163;&#186; &#187;&#216;&#184;&#180;&#163;&#186; can you help me please ?thanks"</a>
<li><strong>Previous message:</strong> <a href="23166.php">&#186;&#250;&#209;&#238;: "[OMPI users] &#187;&#216;&#184;&#180;&#163;&#186; &#187;&#216;&#184;&#180;&#163;&#186; can you help me please ?thanks"</a>
<li><strong>In reply to:</strong> <a href="23166.php">&#186;&#250;&#209;&#238;: "[OMPI users] &#187;&#216;&#184;&#180;&#163;&#186; &#187;&#216;&#184;&#180;&#163;&#186; can you help me please ?thanks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23168.php">ºúÑî: "[OMPI users] &#187;&#216;&#184;&#180;&#163;&#186; &#187;&#216;&#184;&#180;&#163;&#186; &#187;&#216;&#184;&#180;&#163;&#186; can you help me please ?thanks"</a>
<li><strong>Reply:</strong> <a href="23168.php">ºúÑî: "[OMPI users] &#187;&#216;&#184;&#180;&#163;&#186; &#187;&#216;&#184;&#180;&#163;&#186; &#187;&#216;&#184;&#180;&#163;&#186; can you help me please ?thanks"</a>
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
