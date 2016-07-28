<?
$subject_val = "Re: [OMPI users] Open MPI instructional videos";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  4 13:45:45 2008" -->
<!-- isoreceived="20080604174545" -->
<!-- sent="Wed, 4 Jun 2008 13:45:32 -0400" -->
<!-- isosent="20080604174532" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI instructional videos" -->
<!-- id="70C4B8F2-819D-4886-8955-119E5239C6BB_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D4E5BCEE-2B73-4FD6-9DAE-56452D17FABE_at_myri.com" -->
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
<strong>Date:</strong> 2008-06-04 13:45:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5806.php">Jeff Squyres: "Re: [OMPI users] disabling tcp altogether"</a>
<li><strong>Previous message:</strong> <a href="5804.php">Patrick Geoffray: "Re: [OMPI users] tg3 module"</a>
<li><strong>In reply to:</strong> <a href="5797.php">Scott Atchley: "Re: [OMPI users] Open MPI instructional videos"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5808.php">Brock Palen: "Re: [OMPI users] Open MPI instructional videos"</a>
<li><strong>Reply:</strong> <a href="5808.php">Brock Palen: "Re: [OMPI users] Open MPI instructional videos"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the tip!
<br>
<p>I downloaded and tried the qt_tools but all conversions that I did to  
<br>
the MP4 format looked absolutely horrid -- the resulting videos had  
<br>
&quot;jagged&quot; images and all kinds of weird artifacts that would appear and  
<br>
disappear.  The slides were quite readable, but they just looked &quot;bad&quot;.
<br>
<p>Does anyone else have any suggestions?  Perhaps I need to record them  
<br>
differently so that they can be converted to both .mov and .mp4 nicely  
<br>
at the end...?
<br>
<p><p>On Jun 4, 2008, at 9:03 AM, Scott Atchley wrote:
<br>
<p><span class="quotelev1">&gt; Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I remember correctly, Microsoft dropped support for .AVI 3-4 years
</span><br>
<span class="quotelev1">&gt; ago so it can no longer be played by their media player. It is also
</span><br>
<span class="quotelev1">&gt; not native to QT, so you will have to download a plugin (I have it
</span><br>
<span class="quotelev1">&gt; somewhere if you want me to look for it).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I do not know if there is a container format that all players are
</span><br>
<span class="quotelev1">&gt; happy with. My guess would be that MP4 would be the closest.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can convert .mov to .mp4 with a free command-line app, qt_export,
</span><br>
<span class="quotelev1">&gt; which is part of qt_tools. It uses the QT libraries and can transcode
</span><br>
<span class="quotelev1">&gt; to a number of video and audio formats (including AVI if you have the
</span><br>
<span class="quotelev1">&gt; QT plugin).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Scott
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 4, 2008, at 8:31 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; FWIW: I tried the <a href="http://adi.loris.tv/ompi-optimized.avi">http://adi.loris.tv/ompi-optimized.avi</a> URL on my  
</span><br>
<span class="quotelev2">&gt;&gt; Mac
</span><br>
<span class="quotelev2">&gt;&gt; and got redirected to the Quicktime plugin page.  I had no idea which
</span><br>
<span class="quotelev2">&gt;&gt; plugin would make it play AVI files, so I skipped it.  I tried the  
</span><br>
<span class="quotelev2">&gt;&gt; URL
</span><br>
<span class="quotelev2">&gt;&gt; on a Windows machine and Windows Media Player (i.e., what came up by
</span><br>
<span class="quotelev2">&gt;&gt; default) seemed to play the audio just fine, but it couldn't find a
</span><br>
<span class="quotelev2">&gt;&gt; video codec.  Here's the error message that it showed:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    The codec you are missing is not available for download from this
</span><br>
<span class="quotelev2">&gt;&gt; site.
</span><br>
<span class="quotelev2">&gt;&gt;    You might be able to find it on another site by searching the Web
</span><br>
<span class="quotelev2">&gt;&gt; for
</span><br>
<span class="quotelev2">&gt;&gt;    &quot;FMP4&quot; (this is the WaveFormat or FourCC identifier of the codec).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That being said, if we can get a format that works nicely on multiple
</span><br>
<span class="quotelev2">&gt;&gt; platforms / is convenient for users, it would be great if you could
</span><br>
<span class="quotelev2">&gt;&gt; convert them for me -- thanks!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The entire web site is in a SVN repository (our mirrors just run &quot;svn
</span><br>
<span class="quotelev2">&gt;&gt; up&quot; every night): <a href="http://svn.open-mpi.org/svn/ompi-www/trunk">http://svn.open-mpi.org/svn/ompi-www/trunk</a>.  The
</span><br>
<span class="quotelev2">&gt;&gt; videos are under /video (the same directory structure of the web
</span><br>
<span class="quotelev2">&gt;&gt; site).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 4, 2008, at 6:13 AM, Adrian Knoth wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Wed, Jun 04, 2008 at 11:19:48AM +0200, Adrian Knoth wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; People usually recommend ffmpegX for OSX. You might give it a whirl
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; transcode your mov to something else, let's say H.264 in an AVI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; container. (MP4/AVC, DivX, xvid, there are so many names for it)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've checked your files, they're quite good. They are already H.264
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; AAC (advanced audio coding), the only thing wrong is the mov
</span><br>
<span class="quotelev3">&gt;&gt;&gt; container.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It's easy to repack this to avi:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ mencoder input.mov -ovc copy -oac copy -o output.avi
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've tested it with openib-btl-tuning:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; adi_at_chopin:/tmp$ ls -l openib-btl-tuning-v1.2.mov
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -rw-r--r-- 1 adi adi 16249094 Jun  4 11:24 openib-btl-tuning- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.2.mov
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; adi_at_chopin:/tmp$ ls -l ompi-test.avi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -rw-r--r-- 1 adi adi 15964104 Jun  4 11:26 ompi-test.avi
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (you can download it here: &lt;<a href="http://adi.loris.tv/ompi-test.avi">http://adi.loris.tv/ompi-test.avi</a>&gt;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On the other hand, the files are way too large. The video doesn't
</span><br>
<span class="quotelev3">&gt;&gt;&gt; contain much inter-frame correlation, so it's a good idea to give  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; encoder some hints:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; adi_at_chopin:/tmp$ ls -l test*.avi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -rw-r--r-- 1 adi adi 36171648 Jun  4 11:47 test.avi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -rw-r--r-- 1 adi adi 35323842 Jun  4 11:58 testx264.avi
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (from approx. 160MB to 35MB). The first one is MPEG4 with an MP3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; audio
</span><br>
<span class="quotelev3">&gt;&gt;&gt; stream, the second is H.264. Both video encoders were forced to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 100kbit/s
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and keyframes every 300 frames (not for x264):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ mencoder input.mov -oac mp3lame -ovc lavc -lavcopts \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       vbitrate=100:keyint=300 -o output.avi
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For testing purposes, try <a href="http://adi.loris.tv/ompi-optimized.avi">http://adi.loris.tv/ompi-optimized.avi</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'd like to hear if these files, especially the last one, are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; working for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; other users.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If so, I'd take care to convert the movs to avi, probably MPEG4.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (in that case: Jeff, you could probably give me all files in an
</span><br>
<span class="quotelev3">&gt;&gt;&gt; archive
</span><br>
<span class="quotelev3">&gt;&gt;&gt; or point to a direct download link, so I don't have to click through
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; website but just fire up the encoder in the for loop)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cluster and Metacomputing Working Group
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Friedrich-Schiller-Universit&#228;t Jena, Germany
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; private: <a href="http://adi.thur.de">http://adi.thur.de</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5806.php">Jeff Squyres: "Re: [OMPI users] disabling tcp altogether"</a>
<li><strong>Previous message:</strong> <a href="5804.php">Patrick Geoffray: "Re: [OMPI users] tg3 module"</a>
<li><strong>In reply to:</strong> <a href="5797.php">Scott Atchley: "Re: [OMPI users] Open MPI instructional videos"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5808.php">Brock Palen: "Re: [OMPI users] Open MPI instructional videos"</a>
<li><strong>Reply:</strong> <a href="5808.php">Brock Palen: "Re: [OMPI users] Open MPI instructional videos"</a>
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
