<?
$subject_val = "[OMPI users] can you help me please ?thanks";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  5 04:04:46 2013" -->
<!-- isoreceived="20131205090446" -->
<!-- sent="Thu, 5 Dec 2013 17:04:36 +0800" -->
<!-- isosent="20131205090436" -->
<!-- name="&#186;&#250;&#209;&#238;" -->
<!-- email="781578278_at_[hidden]" -->
<!-- subject="[OMPI users] can you help me please ?thanks" -->
<!-- id="tencent_44573F8959DCA73934E72A1C_at_qq.com" -->
<!-- charset="gb18030" -->
<!-- inreplyto="CAMD57oem4xwRAE23REZPCsxn2ehzZB+dppE0_ShL_EDahjTUeQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] can you help me please ?thanks<br>
<strong>From:</strong> &#186;&#250;&#209;&#238; (<em>781578278_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-05 04:04:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23156.php">Ralph Castain: "Re: [OMPI users] can you help me please ?thanks"</a>
<li><strong>Previous message:</strong> <a href="23154.php">Matt Burgess: "Re: [OMPI users] Problem compiling against torque 4.2.4"</a>
<li><strong>In reply to:</strong> <a href="23128.php">Ralph Castain: "Re: [OMPI users] can you help me please ?thanks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23156.php">Ralph Castain: "Re: [OMPI users] can you help me please ?thanks"</a>
<li><strong>Reply:</strong> <a href="23156.php">Ralph Castain: "Re: [OMPI users] can you help me please ?thanks"</a>
<li><strong>Reply:</strong> <a href="23158.php">Jeff Squyres (jsquyres): "Re: [OMPI users] can you help me please ?thanks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My ROCKS cluster includes one frontend and two  compute nodes.In my program,I have use the openmpi API  such as  MPI_Send and  MPI_Recv .  but  when I  run  the progam with 3 processors . one processor  send a message ,other receive message .here are some code. 
<br>
&nbsp;int*a=(int*)malloc(sizeof(int)*number);
<br>
MPI_Send(a,number, MPI_INT, 1, 1,MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;int*b=(int*)malloc(sizeof(int)*number);
<br>
MPI_Recv(b, number, MPI_INT, 0, MPI_ANY_TAG, MPI_COMM_WORLD, &amp;status); 
<br>
&nbsp;&nbsp;
<br>
&nbsp;when number is least than 10000,it runs fast.
<br>
but number is more than 15000,it runs slowly
<br>
&nbsp;&nbsp;
<br>
&nbsp;why??  becesue openmpi API ?? or other  problems? 
<br>

<br>
&nbsp;------------------ &#212;&#173;&#202;&#188;&#211;&#202;&#188;&#254; ------------------
<br>
&nbsp;&nbsp;&#183;&#162;&#188;&#254;&#200;&#203;: &quot;Ralph Castain&quot;;&lt;rhc_at_[hidden]&gt;;
<br>
&nbsp;&#183;&#162;&#203;&#205;&#202;&#177;&#188;&#228;: 2013&#196;&#234;12&#212;&#194;3&#200;&#213;(&#208;&#199;&#198;&#218;&#182;&#254;) &#214;&#208;&#206;&#231;1:39
<br>
&nbsp;&#202;&#213;&#188;&#254;&#200;&#203;: &quot;Open MPI Users&quot;&lt;users_at_[hidden]&gt;; 
<br>
&nbsp;
<br>
&nbsp;&#214;&#247;&#204;&#226;: Re: [OMPI users] can you help me please ?thanks
<br>

<br>
&nbsp;
<br>

<br>
&nbsp;
<br>
&nbsp;
<br>
&nbsp;
<br>

<br>
&nbsp;On Mon, Dec 2, 2013 at 9:23 PM, &#186;&#250;&#209;&#238; &lt;781578278_at_[hidden]&gt; wrote:
<br>
&nbsp;A simple program at my 4-node ROCKS cluster runs fine with command: 
<br>
/opt/openmpi/bin/mpirun -np 4 -machinefile machines ./sort_mpi6
<br>
&nbsp;
<br>

<br>
Another bigger programs runs fine on the head node only with command:
<br>
&nbsp;
<br>
cd ./sphere; /opt/openmpi/bin/mpirun -np 4 ../bin/sort_mpi6
<br>
&nbsp;
<br>
But with the command:
<br>
&nbsp;
<br>
cd /sphere; /opt/openmpi/bin/mpirun -np 4 -machinefile ../machines
<br>
../bin/sort_mpi6
<br>
&nbsp;
<br>
It gives output that:
<br>
&nbsp;
<br>
../bin/sort_mpi6: error while loading shared libraries: libgdal.so.1: cannot open
<br>
shared object file: No such file or directory
<br>
../bin/sort_mpi6: error while loading shared libraries: libgdal.so.1: cannot open
<br>
shared object file: No such file or directory
<br>
../bin/sort_mpi6: error while loading shared libraries: libgdal.so.1: cannot open
<br>
shared object file: No such file or directory
<br>
&nbsp;&nbsp;
<br>

<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a><br>
<p>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23155/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23156.php">Ralph Castain: "Re: [OMPI users] can you help me please ?thanks"</a>
<li><strong>Previous message:</strong> <a href="23154.php">Matt Burgess: "Re: [OMPI users] Problem compiling against torque 4.2.4"</a>
<li><strong>In reply to:</strong> <a href="23128.php">Ralph Castain: "Re: [OMPI users] can you help me please ?thanks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23156.php">Ralph Castain: "Re: [OMPI users] can you help me please ?thanks"</a>
<li><strong>Reply:</strong> <a href="23156.php">Ralph Castain: "Re: [OMPI users] can you help me please ?thanks"</a>
<li><strong>Reply:</strong> <a href="23158.php">Jeff Squyres (jsquyres): "Re: [OMPI users] can you help me please ?thanks"</a>
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
