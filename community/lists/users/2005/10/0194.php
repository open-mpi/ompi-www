<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 12 19:15:21 2005" -->
<!-- isoreceived="20051013001521" -->
<!-- sent="Wed, 12 Oct 2005 17:15:15 -0700" -->
<!-- isosent="20051013001515" -->
<!-- name="Ken Mighell" -->
<!-- email="mighell_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Building 1.0rc3 on Mac OSX Tiger with macosx-pkg/buildpackage.sh fails on Apple dual G5 tower" -->
<!-- id="58B0BD69-C1F1-4E69-B79D-C2AD5A0D6416_at_noao.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C177976F-FB63-410C-9140-B47951D08F78_at_noao.edu" -->
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
<strong>From:</strong> Ken Mighell (<em>mighell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-10-12 19:15:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0195.php">Tim Prins: "Re: [O-MPI users] Fwd: Fwd: [Beowulf] MorphMPI based on fortran itf"</a>
<li><strong>Previous message:</strong> <a href="0193.php">Ken Mighell: "Re: [O-MPI users] Building 1.0rc3 on Mac OSX Tiger with macosx-pkg/buildpackage.sh fails on Apple dual G5 tower"</a>
<li><strong>In reply to:</strong> <a href="0193.php">Ken Mighell: "Re: [O-MPI users] Building 1.0rc3 on Mac OSX Tiger with macosx-pkg/buildpackage.sh fails on Apple dual G5 tower"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0198.php">Jeff Squyres: "Re: [O-MPI users] Building 1.0rc3 on Mac OSX Tiger with macosx-pkg/buildpackage.sh fails on Apple dual G5 tower"</a>
<li><strong>Reply:</strong> <a href="0198.php">Jeff Squyres: "Re: [O-MPI users] Building 1.0rc3 on Mac OSX Tiger with macosx-pkg/buildpackage.sh fails on Apple dual G5 tower"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Brian,
<br>
<p>The file
<br>
<p>/openmpi-1.0rc3/contrib/dist/macosx-pkg/buildpackage.sh
<br>
<p>has a symbol TMP_DIR which is undefined.  Replacing TMP_DIR with   
<br>
BUILD_TMP lead to a dmg file
<br>
which installed without a problem on my Apple dual G5 tower:
<br>
<p>mighell% ./buildpackage.sh ~/pkg/openmpi/src/openmpi-1.0rc3.tar.gz ~/ 
<br>
pkg/openmpi/
<br>
--&gt; Configuration options:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Package Name:   openmpi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Prefix:         /Users/mighell/pkg/openmpi/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Boot:           ssh
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Config Options: --disable-f77 --without-cs-fs
<br>
--&gt; Found tarball: /Users/mighell/pkg/openmpi/src/openmpi-1.0rc3.tar.gz
<br>
--&gt; Found OMPI version: 1.0rc3
<br>
--&gt; Cleaning environment
<br>
--&gt; Making play space: /tmp/buildpackage-6446
<br>
--&gt; Copying tarball
<br>
--&gt; Untarring source: tar xzf openmpi-1.0rc3.tar.gz
<br>
--&gt; Running configure: ./configure --prefix=/Users/mighell/pkg/ 
<br>
openmpi/ --with-rsh=ssh --disable-f77 --without-cs-fs
<br>
--&gt; Building: make all
<br>
--&gt; Installing:
<br>
--&gt; Copying in special files: README /Users/mighell/pkg/openmpi/src/ 
<br>
openmpi-1.0rc3/contrib/dist/macosx-pkg/ReadMe.rtf LICENSE
<br>
--&gt; Creating Package Info:
<br>
--&gt; Copying OS X-specific ReadMe into package
<br>
--&gt; Creating pax file
<br>
--&gt; Compressing pax file
<br>
--&gt; Creating bom file
<br>
--&gt; Generating sizes file:
<br>
NumFiles      207
<br>
InstalledSize 7504
<br>
CompressedSize 7504
<br>
--&gt; Creating Disc Image
<br>
--&gt; Copying Package to Disc Image
<br>
--&gt; Ejecting R/W disk: hdiutil eject /dev/disk2s2
<br>
--&gt; Resizing: hdiutil resize &quot;/tmp/buildpackage-6446/ 
<br>
openmpi-1.0rc3RW.dmg&quot; -sectors min
<br>
--&gt; Converting to R-O: hdiutil convert &quot;/tmp/buildpackage-6446/ 
<br>
openmpi-1.0rc3RW.dmg&quot; -format UDRO -o &quot;/tmp/openmpi-1.0rc3.dmg&quot;
<br>
--&gt; Compressing disk image
<br>
--&gt; Cleaning up the staging directory
<br>
--&gt; Done.  Package is at: /tmp/openmpi-1.0rc3.dmg.gz
<br>
<p>Thanks,
<br>
<p>-Ken
<br>
<p>------------------------------------------------------------------------ 
<br>
---------------------------------
<br>
Kenneth Mighell, Associate Scientist            E-mail: .............  
<br>
mighell_at_[hidden]
<br>
Kitt Peak National Observatory                      
<br>
Phone: .................. 520-318-8391
<br>
National Optical Astronomy Observatory      Fax: ....................  
<br>
520-318-8360
<br>
P.O. Box 26732, Tucson, AZ  85726-6732   URL: <a href="http://www.noao.edu/">http://www.noao.edu/</a> 
<br>
staff/mighell
<br>
<p>On Oct 12, 2005, at 4:13 PM, Ken Mighell wrote:
<br>
<p><span class="quotelev1">&gt; Dear Brian,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Previously my CC environment variable was set to cc:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mighell% printenv CC
</span><br>
<span class="quotelev1">&gt; cc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I then set the CC environment variable to gcc:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mighell% setenv CC gcc
</span><br>
<span class="quotelev1">&gt; mighell% printenv CC
</span><br>
<span class="quotelev1">&gt; gcc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and then tried to build the package
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mighell% ./buildpackage.sh ~/pkg/openmpi/src/openmpi-1.0rc3.tar.gz  
</span><br>
<span class="quotelev1">&gt; ~/pkg/openmpi/
</span><br>
<span class="quotelev1">&gt; --&gt; Configuration options:
</span><br>
<span class="quotelev1">&gt;     Package Name:   openmpi
</span><br>
<span class="quotelev1">&gt;     Prefix:         /Users/mighell/pkg/openmpi/
</span><br>
<span class="quotelev1">&gt;     Boot:           ssh
</span><br>
<span class="quotelev1">&gt;     Config Options: --disable-f77 --without-cs-fs
</span><br>
<span class="quotelev1">&gt; --&gt; Found tarball: /Users/mighell/pkg/openmpi/src/ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.0rc3.tar.gz
</span><br>
<span class="quotelev1">&gt; --&gt; Found OMPI version: 1.0rc3
</span><br>
<span class="quotelev1">&gt; --&gt; Cleaning environment
</span><br>
<span class="quotelev1">&gt; --&gt; Making play space: /tmp/buildpackage-1930
</span><br>
<span class="quotelev1">&gt; --&gt; Copying tarball
</span><br>
<span class="quotelev1">&gt; --&gt; Untarring source: tar xzf openmpi-1.0rc3.tar.gz
</span><br>
<span class="quotelev1">&gt; --&gt; Running configure: ./configure --prefix=/Users/mighell/pkg/ 
</span><br>
<span class="quotelev1">&gt; openmpi/ --with-rsh=ssh --disable-f77 --without-cs-fs
</span><br>
<span class="quotelev1">&gt; --&gt; Building: make all
</span><br>
<span class="quotelev1">&gt; --&gt; Installing:
</span><br>
<span class="quotelev1">&gt; --&gt; Copying in special files: README /Users/mighell/pkg/openmpi/src/ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.0rc3/contrib/dist/macosx-pkg/ReadMe.rtf LICENSE
</span><br>
<span class="quotelev1">&gt; touch: /disk.out: Permission denied
</span><br>
<span class="quotelev1">&gt; --&gt; Creating Package Info:
</span><br>
<span class="quotelev1">&gt; --&gt; Copying OS X-specific ReadMe into package
</span><br>
<span class="quotelev1">&gt; --&gt; Creating pax file
</span><br>
<span class="quotelev1">&gt; ./buildpackage.sh: line 259: /disk.out: Permission denied
</span><br>
<span class="quotelev1">&gt; *** Failed building pax file.  Aborting!
</span><br>
<span class="quotelev1">&gt; *** Check /disk.out for information
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The output file disk.out apparently does not exist; I could not  
</span><br>
<span class="quotelev1">&gt; find any file called disk.out on my machine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Ken
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0194/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0195.php">Tim Prins: "Re: [O-MPI users] Fwd: Fwd: [Beowulf] MorphMPI based on fortran itf"</a>
<li><strong>Previous message:</strong> <a href="0193.php">Ken Mighell: "Re: [O-MPI users] Building 1.0rc3 on Mac OSX Tiger with macosx-pkg/buildpackage.sh fails on Apple dual G5 tower"</a>
<li><strong>In reply to:</strong> <a href="0193.php">Ken Mighell: "Re: [O-MPI users] Building 1.0rc3 on Mac OSX Tiger with macosx-pkg/buildpackage.sh fails on Apple dual G5 tower"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0198.php">Jeff Squyres: "Re: [O-MPI users] Building 1.0rc3 on Mac OSX Tiger with macosx-pkg/buildpackage.sh fails on Apple dual G5 tower"</a>
<li><strong>Reply:</strong> <a href="0198.php">Jeff Squyres: "Re: [O-MPI users] Building 1.0rc3 on Mac OSX Tiger with macosx-pkg/buildpackage.sh fails on Apple dual G5 tower"</a>
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
