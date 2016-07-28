<?
$subject_val = "Re: [OMPI users] Open MPI instructional videos";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  4 06:14:01 2008" -->
<!-- isoreceived="20080604101401" -->
<!-- sent="Wed, 4 Jun 2008 12:13:42 +0200" -->
<!-- isosent="20080604101342" -->
<!-- name="Adrian Knoth" -->
<!-- email="adi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI instructional videos" -->
<!-- id="20080604101342.GG14055_at_ltw.loris.tv" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20080604091948.GF14055_at_ltw.loris.tv" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI instructional videos<br>
<strong>From:</strong> Adrian Knoth (<em>adi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-04 06:13:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5795.php">Jeff Squyres: "Re: [OMPI users] Open MPI instructional videos"</a>
<li><strong>Previous message:</strong> <a href="5793.php">Adrian Knoth: "Re: [OMPI users] Open MPI instructional videos"</a>
<li><strong>In reply to:</strong> <a href="5793.php">Adrian Knoth: "Re: [OMPI users] Open MPI instructional videos"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5795.php">Jeff Squyres: "Re: [OMPI users] Open MPI instructional videos"</a>
<li><strong>Reply:</strong> <a href="5795.php">Jeff Squyres: "Re: [OMPI users] Open MPI instructional videos"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Jun 04, 2008 at 11:19:48AM +0200, Adrian Knoth wrote:
<br>
<p><span class="quotelev1">&gt; People usually recommend ffmpegX for OSX. You might give it a whirl to
</span><br>
<span class="quotelev1">&gt; transcode your mov to something else, let's say H.264 in an AVI
</span><br>
<span class="quotelev1">&gt; container. (MP4/AVC, DivX, xvid, there are so many names for it)
</span><br>
<p>I've checked your files, they're quite good. They are already H.264 and
<br>
AAC (advanced audio coding), the only thing wrong is the mov container.
<br>
<p>It's easy to repack this to avi:
<br>
<p>&nbsp;&nbsp;&nbsp;$ mencoder input.mov -ovc copy -oac copy -o output.avi
<br>
<p>I've tested it with openib-btl-tuning:
<br>
<p>adi_at_chopin:/tmp$ ls -l openib-btl-tuning-v1.2.mov 
<br>
-rw-r--r-- 1 adi adi 16249094 Jun  4 11:24 openib-btl-tuning-v1.2.mov
<br>
<p>adi_at_chopin:/tmp$ ls -l ompi-test.avi 
<br>
-rw-r--r-- 1 adi adi 15964104 Jun  4 11:26 ompi-test.avi
<br>
<p>(you can download it here: &lt;<a href="http://adi.loris.tv/ompi-test.avi">http://adi.loris.tv/ompi-test.avi</a>&gt;)
<br>
<p>On the other hand, the files are way too large. The video doesn't
<br>
contain much inter-frame correlation, so it's a good idea to give the
<br>
encoder some hints:
<br>
<p>adi_at_chopin:/tmp$ ls -l test*.avi
<br>
-rw-r--r-- 1 adi adi 36171648 Jun  4 11:47 test.avi
<br>
-rw-r--r-- 1 adi adi 35323842 Jun  4 11:58 testx264.avi
<br>
<p>(from approx. 160MB to 35MB). The first one is MPEG4 with an MP3 audio
<br>
stream, the second is H.264. Both video encoders were forced to 100kbit/s
<br>
and keyframes every 300 frames (not for x264):
<br>
<p>&nbsp;&nbsp;&nbsp;$ mencoder input.mov -oac mp3lame -ovc lavc -lavcopts \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;vbitrate=100:keyint=300 -o output.avi
<br>
<p>For testing purposes, try <a href="http://adi.loris.tv/ompi-optimized.avi">http://adi.loris.tv/ompi-optimized.avi</a>
<br>
<p>I'd like to hear if these files, especially the last one, are working for
<br>
other users.
<br>
<p>If so, I'd take care to convert the movs to avi, probably MPEG4.
<br>
<p>(in that case: Jeff, you could probably give me all files in an archive
<br>
or point to a direct download link, so I don't have to click through the
<br>
website but just fire up the encoder in the for loop)
<br>
<p><pre>
-- 
Cluster and Metacomputing Working Group
Friedrich-Schiller-Universit&#228;t Jena, Germany
private: <a href="http://adi.thur.de">http://adi.thur.de</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5795.php">Jeff Squyres: "Re: [OMPI users] Open MPI instructional videos"</a>
<li><strong>Previous message:</strong> <a href="5793.php">Adrian Knoth: "Re: [OMPI users] Open MPI instructional videos"</a>
<li><strong>In reply to:</strong> <a href="5793.php">Adrian Knoth: "Re: [OMPI users] Open MPI instructional videos"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5795.php">Jeff Squyres: "Re: [OMPI users] Open MPI instructional videos"</a>
<li><strong>Reply:</strong> <a href="5795.php">Jeff Squyres: "Re: [OMPI users] Open MPI instructional videos"</a>
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
