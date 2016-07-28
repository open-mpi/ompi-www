<?
$subject_val = "[OMPI users] &#187;&#216;&#184;&#180;&#163;&#186;  can you help me please ?thanks";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  3 04:40:39 2013" -->
<!-- isoreceived="20131203094039" -->
<!-- sent="Tue, 3 Dec 2013 17:40:32 +0800" -->
<!-- isosent="20131203094032" -->
<!-- name="&#186;&#250;&#209;&#238;" -->
<!-- email="781578278_at_[hidden]" -->
<!-- subject="[OMPI users] &amp;#187;&amp;#216;&amp;#184;&amp;#180;&amp;#163;&amp;#186;  can you help me please ?thanks" -->
<!-- id="tencent_46A26E25190BC69C3DF2CB74_at_qq.com" -->
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
<strong>Subject:</strong> [OMPI users] &#187;&#216;&#184;&#180;&#163;&#186;  can you help me please ?thanks<br>
<strong>From:</strong> &#186;&#250;&#209;&#238; (<em>781578278_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-03 04:40:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23130.php">Ivan Borisov: "[OMPI users] Several questions about new Java bindings"</a>
<li><strong>Previous message:</strong> <a href="23128.php">Ralph Castain: "Re: [OMPI users] can you help me please ?thanks"</a>
<li><strong>In reply to:</strong> <a href="23128.php">Ralph Castain: "Re: [OMPI users] can you help me please ?thanks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23134.php">Ralph Castain: "Re: [OMPI users] &#187;&#216;&#184;&#180;&#163;&#186; can you help me please ?thanks"</a>
<li><strong>Reply:</strong> <a href="23134.php">Ralph Castain: "Re: [OMPI users] &#187;&#216;&#184;&#180;&#163;&#186; can you help me please ?thanks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
how to add  add the path to your default shell profile (e.g., .bashrc)?and here is my LD_LIBRARY_PATH  path  on complier export  on rocks cluster,include frontend and compute nodes
<br>
&nbsp;&nbsp;
<br>
&nbsp;declare -x LD_LIBRARY_PATH=&quot;/usr/lib:/home/hushjian/software/gdal/lib:/opt/openmpi/lib&quot;
<br>
&nbsp;&nbsp;
<br>
&nbsp;and I also add  LD_LIBRARY_PATH=&quot;/usr/lib:/home/hushjian/software/gdal/lib:/opt/openmpi/lib&quot; in ~/.bash_profile
<br>
&nbsp;&nbsp;
<br>
&nbsp;can you tell me how to set default shell profile (e.g., .bashrc)? thanks  our lab is studying HPC for CPU-GPU cluster 
<br>

<br>

<br>
&nbsp;
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
&nbsp;Check that your LD_LIBRARY_PATH is getting set properly on your remote node - it likely is missing the path to this libgdal. You might need to add the path to your default shell profile (e.g., .bashrc)
<br>

<br>

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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23129/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23130.php">Ivan Borisov: "[OMPI users] Several questions about new Java bindings"</a>
<li><strong>Previous message:</strong> <a href="23128.php">Ralph Castain: "Re: [OMPI users] can you help me please ?thanks"</a>
<li><strong>In reply to:</strong> <a href="23128.php">Ralph Castain: "Re: [OMPI users] can you help me please ?thanks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23134.php">Ralph Castain: "Re: [OMPI users] &#187;&#216;&#184;&#180;&#163;&#186; can you help me please ?thanks"</a>
<li><strong>Reply:</strong> <a href="23134.php">Ralph Castain: "Re: [OMPI users] &#187;&#216;&#184;&#180;&#163;&#186; can you help me please ?thanks"</a>
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
