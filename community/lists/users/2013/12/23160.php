<?
$subject_val = "Re: [OMPI users] &#187;&#216;&#184;&#180;&#163;&#186;  can you help me please ?thanks";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  6 09:41:11 2013" -->
<!-- isoreceived="20131206144111" -->
<!-- sent="Fri, 6 Dec 2013 14:41:09 +0000" -->
<!-- isosent="20131206144109" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] &amp;#187;&amp;#216;&amp;#184;&amp;#180;&amp;#163;&amp;#186;  can you help me please ?thanks" -->
<!-- id="1219551B-307C-432D-9B48-8EBA8D577ECA_at_cisco.com" -->
<!-- charset="GB18030" -->
<!-- inreplyto="tencent_4CF63D413E004C045024D566_at_qq.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] &#187;&#216;&#184;&#180;&#163;&#186;  can you help me please ?thanks<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-06 09:41:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23161.php">Bruno Coutinho: "Re: [OMPI users] &#187;&#216;&#184;&#180;&#163;&#186; can you help me please ?thanks"</a>
<li><strong>Previous message:</strong> <a href="23159.php">&#186;&#250;&#209;&#238;: "[OMPI users] &#187;&#216;&#184;&#180;&#163;&#186;  can you help me please ?thanks"</a>
<li><strong>In reply to:</strong> <a href="23159.php">&#186;&#250;&#209;&#238;: "[OMPI users] &#187;&#216;&#184;&#180;&#163;&#186;  can you help me please ?thanks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23161.php">Bruno Coutinho: "Re: [OMPI users] &#187;&#216;&#184;&#180;&#163;&#186; can you help me please ?thanks"</a>
<li><strong>Reply:</strong> <a href="23161.php">Bruno Coutinho: "Re: [OMPI users] &#187;&#216;&#184;&#180;&#163;&#186; can you help me please ?thanks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I sent you some further questions yesterday:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/lists/users/2013/12/23158.php">http://www.open-mpi.org/community/lists/users/2013/12/23158.php</a>
<br>
<p><p>On Dec 6, 2013, at 1:35 AM, &#186;&#250;&#209;&#238; &lt;781578278_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Here is  my code:
</span><br>
<span class="quotelev1">&gt; int*a=(int*)malloc(sizeof(int)*number);
</span><br>
<span class="quotelev1">&gt; MPI_Send(a,number, MPI_INT, 1, 1,MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; int*b=(int*)malloc(sizeof(int)*number);
</span><br>
<span class="quotelev1">&gt; MPI_Recv(b, number, MPI_INT, 0, MPI_ANY_TAG, MPI_COMM_WORLD, &amp;status);
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; number  here is the size of my array(eg,a or b).
</span><br>
<span class="quotelev1">&gt; I  have try it on my local compute and my rocks cluster.On rocks cluster, one processor  on  one frontend node  use &quot;MPI_Send&quot; send a message ,other processors on compute nodes use &quot;MPI_Recv&quot; receive message .
</span><br>
<span class="quotelev1">&gt; when number is least than 10000,other processors can receive message fast;
</span><br>
<span class="quotelev1">&gt; but when  number is more than 15000,other processors can receive message slowly
</span><br>
<span class="quotelev1">&gt; why??  becesue openmpi API ?? or other  problems? 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; it spends me a few days , I want your help,thanks for all readers. good luck for you
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------ &#212;&#173;&#202;&#188;&#211;&#202;&#188;&#254; ------------------
</span><br>
<span class="quotelev1">&gt; &#183;&#162;&#188;&#254;&#200;&#203;: &quot;Ralph Castain&quot;;&lt;rhc_at_[hidden]&gt;;
</span><br>
<span class="quotelev1">&gt; &#183;&#162;&#203;&#205;&#202;&#177;&#188;&#228;: 2013&#196;&#234;12&#212;&#194;5&#200;&#213;(&#208;&#199;&#198;&#218;&#203;&#196;) &#205;&#237;&#201;&#207;6:52
</span><br>
<span class="quotelev1">&gt; &#202;&#213;&#188;&#254;&#200;&#203;: &quot;Open MPI Users&quot;&lt;users_at_[hidden]&gt;;
</span><br>
<span class="quotelev1">&gt; &#214;&#247;&#204;&#226;: Re: [OMPI users] can you help me please ?thanks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You are running 15000 ranks on two nodes?? My best guess is that you are swapping like crazy as your memory footprint problem exceeds available physical memory.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Dec 5, 2013 at 1:04 AM, &#186;&#250;&#209;&#238; &lt;781578278_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; My ROCKS cluster includes one frontend and two  compute nodes.In my program,I have use the openmpi API  such as  MPI_Send and  MPI_Recv .  but  when I  run  the progam with 3 processors . one processor  send a message ,other receive message .here are some code.
</span><br>
<span class="quotelev1">&gt; int*a=(int*)malloc(sizeof(int)*number);
</span><br>
<span class="quotelev1">&gt; MPI_Send(a,number, MPI_INT, 1, 1,MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; int*b=(int*)malloc(sizeof(int)*number);
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
<span class="quotelev1">&gt; &#183;&#162;&#188;&#254;&#200;&#203;: &quot;Ralph Castain&quot;;&lt;rhc_at_[hidden]&gt;;
</span><br>
<span class="quotelev1">&gt; &#183;&#162;&#203;&#205;&#202;&#177;&#188;&#228;: 2013&#196;&#234;12&#212;&#194;3&#200;&#213;(&#208;&#199;&#198;&#218;&#182;&#254;) &#214;&#208;&#206;&#231;1:39
</span><br>
<span class="quotelev1">&gt; &#202;&#213;&#188;&#254;&#200;&#203;: &quot;Open MPI Users&quot;&lt;users_at_[hidden]&gt;;
</span><br>
<span class="quotelev1">&gt; &#214;&#247;&#204;&#226;: Re: [OMPI users] can you help me please ?thanks
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
<span class="quotelev1">&gt; A simple program at my 4-node ROCKS cluster runs fine with command:
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
<span class="quotelev1">&gt; ../bin/sort_mpi6: error while loading shared libraries: libgdal.so.1: cannot open
</span><br>
<span class="quotelev1">&gt; shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt; ../bin/sort_mpi6: error while loading shared libraries: libgdal.so.1: cannot open
</span><br>
<span class="quotelev1">&gt; shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt; ../bin/sort_mpi6: error while loading shared libraries: libgdal.so.1: cannot open
</span><br>
<span class="quotelev1">&gt; shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt; 
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23161.php">Bruno Coutinho: "Re: [OMPI users] &#187;&#216;&#184;&#180;&#163;&#186; can you help me please ?thanks"</a>
<li><strong>Previous message:</strong> <a href="23159.php">&#186;&#250;&#209;&#238;: "[OMPI users] &#187;&#216;&#184;&#180;&#163;&#186;  can you help me please ?thanks"</a>
<li><strong>In reply to:</strong> <a href="23159.php">&#186;&#250;&#209;&#238;: "[OMPI users] &#187;&#216;&#184;&#180;&#163;&#186;  can you help me please ?thanks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23161.php">Bruno Coutinho: "Re: [OMPI users] &#187;&#216;&#184;&#180;&#163;&#186; can you help me please ?thanks"</a>
<li><strong>Reply:</strong> <a href="23161.php">Bruno Coutinho: "Re: [OMPI users] &#187;&#216;&#184;&#180;&#163;&#186; can you help me please ?thanks"</a>
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
