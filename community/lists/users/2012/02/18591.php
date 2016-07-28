<?
$subject_val = "[OMPI users] Drastic OpenMPI performance reduction when message exeeds 128 KB";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 29 05:39:58 2012" -->
<!-- isoreceived="20120229103958" -->
<!-- sent="Wed, 29 Feb 2012 02:39:54 -0800 (PST)" -->
<!-- isosent="20120229103954" -->
<!-- name="adrian sabou" -->
<!-- email="adrian.sabou_at_[hidden]" -->
<!-- subject="[OMPI users] Drastic OpenMPI performance reduction when message exeeds 128 KB" -->
<!-- id="1330511994.6291.YahooMailNeo_at_web161702.mail.bf1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Drastic OpenMPI performance reduction when message exeeds 128 KB<br>
<strong>From:</strong> adrian sabou (<em>adrian.sabou_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-29 05:39:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18592.php">Jeffrey Squyres: "Re: [OMPI users] Could not execute the executable&quot;/home/MET/hrm/bin/hostlist&quot;: Exec format error"</a>
<li><strong>Previous message:</strong> <a href="18590.php">Auclair Francis: "[OMPI users] Hybrid OpenMPI / OpenMP programming"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18594.php">Jeffrey Squyres: "Re: [OMPI users] Drastic OpenMPI performance reduction when message exeeds 128 KB"</a>
<li><strong>Reply:</strong> <a href="18594.php">Jeffrey Squyres: "Re: [OMPI users] Drastic OpenMPI performance reduction when message exeeds 128 KB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
&#160;
I am experiencing a rather unpleasant issue with a simple OpenMPI app. I have 4 nodes communicating with a central node. Performance is good and the application behaves as it should. (i.e. performance steadily decreases as I increase the work size). My problem is that immediately after messages passed between nodes become larger that 128 KB performance drops suddenly in an unexpected way. I have done some research and tried to modify various eager limits, without any success. I am a beginner in OpenMPI and I can't seem to figure out this issue. I am hopping that one of you might shed some light on this situation. My OpenMPI version is 1.5.4 on Ubuntu Server 10.04 64 bit. Any help is welcome. Thanks.
&#160;
Adrian 
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18591/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18592.php">Jeffrey Squyres: "Re: [OMPI users] Could not execute the executable&quot;/home/MET/hrm/bin/hostlist&quot;: Exec format error"</a>
<li><strong>Previous message:</strong> <a href="18590.php">Auclair Francis: "[OMPI users] Hybrid OpenMPI / OpenMP programming"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18594.php">Jeffrey Squyres: "Re: [OMPI users] Drastic OpenMPI performance reduction when message exeeds 128 KB"</a>
<li><strong>Reply:</strong> <a href="18594.php">Jeffrey Squyres: "Re: [OMPI users] Drastic OpenMPI performance reduction when message exeeds 128 KB"</a>
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
