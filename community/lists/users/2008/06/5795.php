<?
$subject_val = "Re: [OMPI users] Open MPI instructional videos";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  4 08:31:40 2008" -->
<!-- isoreceived="20080604123140" -->
<!-- sent="Wed, 4 Jun 2008 08:31:31 -0400" -->
<!-- isosent="20080604123131" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI instructional videos" -->
<!-- id="C329115B-1841-4266-918D-3D2FE771118A_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20080604101342.GG14055_at_ltw.loris.tv" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-04 08:31:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5796.php">Jeff Squyres: "Re: [OMPI users] Open MPI instructional videos"</a>
<li><strong>Previous message:</strong> <a href="5794.php">Adrian Knoth: "Re: [OMPI users] Open MPI instructional videos"</a>
<li><strong>In reply to:</strong> <a href="5794.php">Adrian Knoth: "Re: [OMPI users] Open MPI instructional videos"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5797.php">Scott Atchley: "Re: [OMPI users] Open MPI instructional videos"</a>
<li><strong>Reply:</strong> <a href="5797.php">Scott Atchley: "Re: [OMPI users] Open MPI instructional videos"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW: I tried the <a href="http://adi.loris.tv/ompi-optimized.avi">http://adi.loris.tv/ompi-optimized.avi</a> URL on my Mac  
<br>
and got redirected to the Quicktime plugin page.  I had no idea which  
<br>
plugin would make it play AVI files, so I skipped it.  I tried the URL  
<br>
on a Windows machine and Windows Media Player (i.e., what came up by  
<br>
default) seemed to play the audio just fine, but it couldn't find a  
<br>
video codec.  Here's the error message that it showed:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The codec you are missing is not available for download from this  
<br>
site.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;You might be able to find it on another site by searching the Web  
<br>
for
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;FMP4&quot; (this is the WaveFormat or FourCC identifier of the codec).
<br>
<p>That being said, if we can get a format that works nicely on multiple  
<br>
platforms / is convenient for users, it would be great if you could  
<br>
convert them for me -- thanks!
<br>
<p>The entire web site is in a SVN repository (our mirrors just run &quot;svn  
<br>
up&quot; every night): <a href="http://svn.open-mpi.org/svn/ompi-www/trunk">http://svn.open-mpi.org/svn/ompi-www/trunk</a>.  The  
<br>
videos are under /video (the same directory structure of the web site).
<br>
<p><p>On Jun 4, 2008, at 6:13 AM, Adrian Knoth wrote:
<br>
<p><span class="quotelev1">&gt; On Wed, Jun 04, 2008 at 11:19:48AM +0200, Adrian Knoth wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; People usually recommend ffmpegX for OSX. You might give it a whirl  
</span><br>
<span class="quotelev2">&gt;&gt; to
</span><br>
<span class="quotelev2">&gt;&gt; transcode your mov to something else, let's say H.264 in an AVI
</span><br>
<span class="quotelev2">&gt;&gt; container. (MP4/AVC, DivX, xvid, there are so many names for it)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've checked your files, they're quite good. They are already H.264  
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt; AAC (advanced audio coding), the only thing wrong is the mov  
</span><br>
<span class="quotelev1">&gt; container.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It's easy to repack this to avi:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   $ mencoder input.mov -ovc copy -oac copy -o output.avi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've tested it with openib-btl-tuning:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; adi_at_chopin:/tmp$ ls -l openib-btl-tuning-v1.2.mov
</span><br>
<span class="quotelev1">&gt; -rw-r--r-- 1 adi adi 16249094 Jun  4 11:24 openib-btl-tuning-v1.2.mov
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; adi_at_chopin:/tmp$ ls -l ompi-test.avi
</span><br>
<span class="quotelev1">&gt; -rw-r--r-- 1 adi adi 15964104 Jun  4 11:26 ompi-test.avi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (you can download it here: &lt;<a href="http://adi.loris.tv/ompi-test.avi">http://adi.loris.tv/ompi-test.avi</a>&gt;)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On the other hand, the files are way too large. The video doesn't
</span><br>
<span class="quotelev1">&gt; contain much inter-frame correlation, so it's a good idea to give the
</span><br>
<span class="quotelev1">&gt; encoder some hints:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; adi_at_chopin:/tmp$ ls -l test*.avi
</span><br>
<span class="quotelev1">&gt; -rw-r--r-- 1 adi adi 36171648 Jun  4 11:47 test.avi
</span><br>
<span class="quotelev1">&gt; -rw-r--r-- 1 adi adi 35323842 Jun  4 11:58 testx264.avi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (from approx. 160MB to 35MB). The first one is MPEG4 with an MP3 audio
</span><br>
<span class="quotelev1">&gt; stream, the second is H.264. Both video encoders were forced to  
</span><br>
<span class="quotelev1">&gt; 100kbit/s
</span><br>
<span class="quotelev1">&gt; and keyframes every 300 frames (not for x264):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   $ mencoder input.mov -oac mp3lame -ovc lavc -lavcopts \
</span><br>
<span class="quotelev1">&gt;         vbitrate=100:keyint=300 -o output.avi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For testing purposes, try <a href="http://adi.loris.tv/ompi-optimized.avi">http://adi.loris.tv/ompi-optimized.avi</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'd like to hear if these files, especially the last one, are  
</span><br>
<span class="quotelev1">&gt; working for
</span><br>
<span class="quotelev1">&gt; other users.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If so, I'd take care to convert the movs to avi, probably MPEG4.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (in that case: Jeff, you could probably give me all files in an  
</span><br>
<span class="quotelev1">&gt; archive
</span><br>
<span class="quotelev1">&gt; or point to a direct download link, so I don't have to click through  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; website but just fire up the encoder in the for loop)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Cluster and Metacomputing Working Group
</span><br>
<span class="quotelev1">&gt; Friedrich-Schiller-Universit&#228;t Jena, Germany
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; private: <a href="http://adi.thur.de">http://adi.thur.de</a>
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5796.php">Jeff Squyres: "Re: [OMPI users] Open MPI instructional videos"</a>
<li><strong>Previous message:</strong> <a href="5794.php">Adrian Knoth: "Re: [OMPI users] Open MPI instructional videos"</a>
<li><strong>In reply to:</strong> <a href="5794.php">Adrian Knoth: "Re: [OMPI users] Open MPI instructional videos"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5797.php">Scott Atchley: "Re: [OMPI users] Open MPI instructional videos"</a>
<li><strong>Reply:</strong> <a href="5797.php">Scott Atchley: "Re: [OMPI users] Open MPI instructional videos"</a>
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
