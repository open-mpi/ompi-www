<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Oct  7 17:46:19 2007" -->
<!-- isoreceived="20071007214619" -->
<!-- sent="Sun, 7 Oct 2007 14:46:14 -0700" -->
<!-- isosent="20071007214614" -->
<!-- name="Michael Clover" -->
<!-- email="mclover_at_[hidden]" -->
<!-- subject="[OMPI users] sed and openmpi on Mac OSX 10.4.10" -->
<!-- id="392D60FD-C09F-4B23-95E6-B5DE43B449B9_at_san.rr.com" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Michael Clover (<em>mclover_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-07 17:46:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4168.php">Reuti: "Re: [OMPI users] ompi-1.2.4 fails to make on iMac (10.4.10)"</a>
<li><strong>Previous message:</strong> <a href="4166.php">Jeff Squyres: "Re: [OMPI users] mca_oob_tcp_peer_try_connect: messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4175.php">Jeff Squyres: "Re: [OMPI users] sed and openmpi on Mac OSX 10.4.10"</a>
<li><strong>Reply:</strong> <a href="4175.php">Jeff Squyres: "Re: [OMPI users] sed and openmpi on Mac OSX 10.4.10"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>I tried to look  at the checksum of my version of sed, and got a  
<br>
different number.  I also found instructions on an Octave web page  
<br>
about loading the GNU sed on a Mac, to replace the POSIX flavored one  
<br>
that comes with it.  I was able to load sed-4.1.4, but still don't  
<br>
get your checksums (I changed the name of the original Mac sed to  
<br>
__sed).  Are you using the Mac supplied sed or not?
<br>
<p>cloverm:~/bin/openmpi-1.2.3:[132]&gt;md5 /usr/local/bin/sed
<br>
MD5 (/usr/local/bin/sed) = 010000f9ed14ed1fa9fcf7406dd8a609
<br>
cloverm:~/bin/openmpi-1.2.3:[133]&gt;md5 /usr/bin/__sed
<br>
MD5 (/usr/bin/__sed) = e8e106779d71f6f2cca9c7157ce4b5eb
<br>
<p>However, this new sed made only a slight difference on  
<br>
openmpi-1.2.3:  instead of getting unescaped newlines, I now get  
<br>
unterminated &quot;s&quot; commands:
<br>
(and with openmpi-1.2.4, I still get the same problem reported  
<br>
yesterday when I try to &quot;make&quot; the successfully configured 1.2.4,  
<br>
namely that line 602 of Makefile is missing a separator).
<br>
<p>checking for OMPI LIBS...
<br>
checking for OMPI extra include dirs...
<br>
<p>*** Final output
<br>
configure: creating ./config.status
<br>
config.status: creating ompi/include/ompi/version.h
<br>
sed: file ./confstatA1BhUF/subs-3.sed line 33: unterminated `s' command
<br>
sed: file ./confstatA1BhUF/subs-4.sed line 4: unterminated `s' command
<br>
config.status: creating orte/include/orte/version.h
<br>
<p><p><p>Michael Clover
<br>
mclover_at_[hidden]
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4168.php">Reuti: "Re: [OMPI users] ompi-1.2.4 fails to make on iMac (10.4.10)"</a>
<li><strong>Previous message:</strong> <a href="4166.php">Jeff Squyres: "Re: [OMPI users] mca_oob_tcp_peer_try_connect: messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4175.php">Jeff Squyres: "Re: [OMPI users] sed and openmpi on Mac OSX 10.4.10"</a>
<li><strong>Reply:</strong> <a href="4175.php">Jeff Squyres: "Re: [OMPI users] sed and openmpi on Mac OSX 10.4.10"</a>
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
