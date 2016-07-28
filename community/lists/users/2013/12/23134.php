<?
$subject_val = "Re: [OMPI users] &#187;&#216;&#184;&#180;&#163;&#186; can you help me please ?thanks";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  3 08:03:39 2013" -->
<!-- isoreceived="20131203130339" -->
<!-- sent="Tue, 3 Dec 2013 05:03:38 -0800" -->
<!-- isosent="20131203130338" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] &amp;#187;&amp;#216;&amp;#184;&amp;#180;&amp;#163;&amp;#186; can you help me please ?thanks" -->
<!-- id="CAMD57od=BVrgwVHn-enUVet2=qCtHM=g+zeu5KaR+u4p-ovuqQ_at_mail.gmail.com" -->
<!-- charset="GB2312" -->
<!-- inreplyto="tencent_46A26E25190BC69C3DF2CB74_at_qq.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-03 08:03:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23135.php">Meredith, Karl: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<li><strong>Previous message:</strong> <a href="23133.php">Ralph Castain: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<li><strong>In reply to:</strong> <a href="23129.php">&#186;&#250;&#209;&#238;: "[OMPI users] &#187;&#216;&#184;&#180;&#163;&#186;  can you help me please ?thanks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23138.php">ºúÑî: "[OMPI users] &#187;&#216;&#184;&#180;&#163;&#186; &#187;&#216;&#184;&#180;&#163;&#186; can you help me please ?thanks"</a>
<li><strong>Reply:</strong> <a href="23138.php">ºúÑî: "[OMPI users] &#187;&#216;&#184;&#180;&#163;&#186; &#187;&#216;&#184;&#180;&#163;&#186; can you help me please ?thanks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The FAQ is your friend, for this and many other questions :-)
<br>
<p><a href="http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path">http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path</a>
<br>
<p><p><p>On Tue, Dec 3, 2013 at 1:40 AM, &#186;&#250;&#209;&#238; &lt;781578278_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  how to add  add the path to your default shell profile (e.g.,
</span><br>
<span class="quotelev1">&gt; .bashrc)?and here is my LD_LIBRARY_PATH  path  on complier export  on rocks
</span><br>
<span class="quotelev1">&gt; cluster,include frontend and compute nodes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; declare -x
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH=&quot;/usr/lib:/home/hushjian/software/gdal/lib:/opt/openmpi/lib&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and I also add
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH=&quot;/usr/lib:/home/hushjian/software/gdal/lib:/opt/openmpi/lib&quot;
</span><br>
<span class="quotelev1">&gt; in ~/.bash_profile
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; can you tell me how to set default shell profile (e.g., .bashrc)? thanks
</span><br>
<span class="quotelev1">&gt; our lab is studying HPC for CPU-GPU cluster
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Check that your LD_LIBRARY_PATH is getting set properly on your remote
</span><br>
<span class="quotelev1">&gt; node - it likely is missing the path to this libgdal. You might need to add
</span><br>
<span class="quotelev1">&gt; the path to your default shell profile (e.g., .bashrc)
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23134/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23135.php">Meredith, Karl: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<li><strong>Previous message:</strong> <a href="23133.php">Ralph Castain: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<li><strong>In reply to:</strong> <a href="23129.php">&#186;&#250;&#209;&#238;: "[OMPI users] &#187;&#216;&#184;&#180;&#163;&#186;  can you help me please ?thanks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23138.php">ºúÑî: "[OMPI users] &#187;&#216;&#184;&#180;&#163;&#186; &#187;&#216;&#184;&#180;&#163;&#186; can you help me please ?thanks"</a>
<li><strong>Reply:</strong> <a href="23138.php">ºúÑî: "[OMPI users] &#187;&#216;&#184;&#180;&#163;&#186; &#187;&#216;&#184;&#180;&#163;&#186; can you help me please ?thanks"</a>
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
