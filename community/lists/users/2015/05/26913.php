<?
$subject_val = "[OMPI users] Fwd: Default value of btl_openib_memalign_threshold";
include("../../include/msg-header.inc");
?>
<!-- received="Sun May 24 12:07:57 2015" -->
<!-- isoreceived="20150524160757" -->
<!-- sent="Sun, 24 May 2015 18:07:52 +0200" -->
<!-- isosent="20150524160752" -->
<!-- name="Xavier Besseron" -->
<!-- email="xavier.besseron_at_[hidden]" -->
<!-- subject="[OMPI users] Fwd: Default value of btl_openib_memalign_threshold" -->
<!-- id="CABgOZMb-s1wCm3qcL54W5B3X=9Bf86oUPqwbm=7=jSTp8dcz-Q_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CABgOZMbrT79C3tURPBksbH_T3dB4EygJ-46zjWWOHvzafk=c+w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Fwd: Default value of btl_openib_memalign_threshold<br>
<strong>From:</strong> Xavier Besseron (<em>xavier.besseron_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-24 12:07:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26914.php">Ralph Castain: "Re: [OMPI users] Default value of btl_openib_memalign_threshold"</a>
<li><strong>Previous message:</strong> <a href="26912.php">XingFENG: "Re: [OMPI users] OPENMPI only recognize 4 cores of AWS EC2 machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26914.php">Ralph Castain: "Re: [OMPI users] Default value of btl_openib_memalign_threshold"</a>
<li><strong>Reply:</strong> <a href="26914.php">Ralph Castain: "Re: [OMPI users] Default value of btl_openib_memalign_threshold"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear OpenMPI developers / users,
<br>
<p>This is much more a comment than a question since I believe I have already
<br>
solved my issue. But I would like to report it.
<br>
<p>I have noticed my code performed very badly with OpenMPI when Infinand is
<br>
enabled, sometime +50% or even +100% overhead.
<br>
I also have this slowdown when running with one thread and one process. In
<br>
such case, there is no other MPI call than MPI_Init() and MPI_Finalize().
<br>
This overhead disappears if I disable at runtime the openib btl, ie with '--mca
<br>
btl ^openib'.
<br>
After further investigation, I figured out it comes from the memory
<br>
allocator which is aligning every memory allocation when Infiniband is used.
<br>
This makes sense because my code is a large irregular C++ code creating and
<br>
deleting many objects.
<br>
<p>Just below is the documentation of the relevant MCA parameters coming
<br>
ompi_info:
<br>
<p>MCA btl: parameter &quot;*btl_openib_memalign*&quot; (current value: &quot;32&quot;, data
<br>
source: default, level: 9 dev/all, type: int)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[64 | 32 | 0] - Enable (64bit or 32bit)/Disable(0) memoryalignment
<br>
for all malloc calls if btl openib is used.
<br>
<p>MCA btl: parameter &quot;*btl_openib_memalign_threshold*&quot; (current value: &quot;*0*&quot;,
<br>
data source: default, level: 9 dev/all, type: size_t)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Allocating memory more than btl_openib_memalign_threshholdbytes
<br>
will automatically be algined to the value of btl_openib_memalign
<br>
bytes.*memalign_threshhold
<br>
defaults to the same value as mca_btl_openib_eager_limit*.
<br>
<p>MCA btl: parameter &quot;*btl_openib_eager_limit*&quot; (current value: &quot;*12288*&quot;,
<br>
data source: default, level: 4 tuner/basic, type: size_t)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Maximum size (in bytes, including header) of &quot;short&quot; messages
<br>
(must be &gt;= 1).
<br>
<p><p>In the end, the problem is that the default value for
<br>
btl_openib_memalign_threshold is 0, which means that *all* memory
<br>
allocations are aligned to 32 bits.
<br>
The documentation says that the default value of
<br>
btl_openib_memalign_threshold should be the the same as
<br>
btl_openib_eager_limit, ie 12288 instead of 0.
<br>
<p>On my side, changing btl_openib_memalign_threshold to 12288 fixes my
<br>
performance issue.
<br>
However, I believe that the default value of btl_openib_memalign_threshold
<br>
should be fixed in the OpenMPI code (or at least the documentation should
<br>
be fixed).
<br>
<p>I tried OpenMPI 1.8.5, 1.7.3 and 1.6.4 and it's all the same.
<br>
<p><p>Bonus question:
<br>
As this issue might impact other users, I'm considering applying a global
<br>
fix on our clusters by setting this default value
<br>
etc/openmpi-mca-params.conf.
<br>
Do you see any good reason not doing it?
<br>
<p>Thank you for your comments.
<br>
<p>Best regards,
<br>
<p>Xavier
<br>
<p><p><pre>
-- 
Dr Xavier BESSERON
Research associate
FSTC, University of Luxembourg
Campus Kirchberg, Office E-007
Phone: +352 46 66 44 5418
<a href="http://luxdem.uni.lu/">http://luxdem.uni.lu/</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26913/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26914.php">Ralph Castain: "Re: [OMPI users] Default value of btl_openib_memalign_threshold"</a>
<li><strong>Previous message:</strong> <a href="26912.php">XingFENG: "Re: [OMPI users] OPENMPI only recognize 4 cores of AWS EC2 machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26914.php">Ralph Castain: "Re: [OMPI users] Default value of btl_openib_memalign_threshold"</a>
<li><strong>Reply:</strong> <a href="26914.php">Ralph Castain: "Re: [OMPI users] Default value of btl_openib_memalign_threshold"</a>
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
