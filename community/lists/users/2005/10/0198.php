<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct 14 07:42:01 2005" -->
<!-- isoreceived="20051014124201" -->
<!-- sent="Fri, 14 Oct 2005 08:41:57 -0400" -->
<!-- isosent="20051014124157" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Building 1.0rc3 on Mac OSX Tiger with macosx-pkg/buildpackage.sh fails on Apple dual G5 tower" -->
<!-- id="e541f4ce1d5db1a564e9c08da693dc6d_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="58B0BD69-C1F1-4E69-B79D-C2AD5A0D6416_at_noao.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-10-14 07:41:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0199.php">Toon Knapen: "Re: [O-MPI users] [Beowulf] MorphMPI based on fortran itf"</a>
<li><strong>Previous message:</strong> <a href="0197.php">Joachim Worringen: "Re: [O-MPI users] [Beowulf] MPI ABI"</a>
<li><strong>In reply to:</strong> <a href="0194.php">Ken Mighell: "Re: [O-MPI users] Building 1.0rc3 on Mac OSX Tiger with macosx-pkg/buildpackage.sh fails on Apple dual G5 tower"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Committed back to SVN -- thanks for catching that!
<br>
<p><p>On Oct 12, 2005, at 8:15 PM, Ken Mighell wrote:
<br>
<p><span class="quotelev1">&gt; Dear Brian,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The file
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /openmpi-1.0rc3/contrib/dist/macosx-pkg/buildpackage.sh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; has a symbol TMP_DIR which is undefined.&#160; Replacing TMP_DIR with&#160;  
</span><br>
<span class="quotelev1">&gt; BUILD_TMP lead to a dmg file
</span><br>
<span class="quotelev1">&gt; which installed without a problem on my Apple dual G5 tower:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;mighell% ./buildpackage.sh ~/pkg/openmpi/src/openmpi-1.0rc3.tar.gz  
</span><br>
<span class="quotelev1">&gt; ~/pkg/openmpi/
</span><br>
<span class="quotelev1">&gt; --&gt; Configuration options:
</span><br>
<span class="quotelev1">&gt; &#160; &#160; Package Name:&#160;&#160; openmpi
</span><br>
<span class="quotelev1">&gt; &#160; &#160; Prefix:&#160; /Users/mighell/pkg/openmpi/
</span><br>
<span class="quotelev1">&gt; &#160; &#160; Boot:&#160; &#160; ssh
</span><br>
<span class="quotelev1">&gt; &#160; &#160; Config Options: --disable-f77 --without-cs-fs
</span><br>
<span class="quotelev1">&gt; --&gt; Found tarball: /Users/mighell/pkg/openmpi/src/openmpi-1.0rc3.tar.gz
</span><br>
<span class="quotelev1">&gt; --&gt; Found OMPI version: 1.0rc3
</span><br>
<span class="quotelev1">&gt; --&gt; Cleaning environment
</span><br>
<span class="quotelev1">&gt; --&gt; Making play space: /tmp/buildpackage-6446
</span><br>
<span class="quotelev1">&gt; --&gt; Copying tarball
</span><br>
<span class="quotelev1">&gt; --&gt; Untarring source: tar xzf openmpi-1.0rc3.tar.gz
</span><br>
<span class="quotelev1">&gt; --&gt; Running configure: ./configure  
</span><br>
<span class="quotelev1">&gt; --prefix=/Users/mighell/pkg/openmpi/ --with-rsh=ssh --disable-f77  
</span><br>
<span class="quotelev1">&gt; --without-cs-fs
</span><br>
<span class="quotelev1">&gt; --&gt; Building: make all
</span><br>
<span class="quotelev1">&gt; --&gt; Installing:
</span><br>
<span class="quotelev1">&gt; --&gt; Copying in special files: README  
</span><br>
<span class="quotelev1">&gt; /Users/mighell/pkg/openmpi/src/openmpi-1.0rc3/contrib/dist/macosx-pkg/ 
</span><br>
<span class="quotelev1">&gt; ReadMe.rtf LICENSE
</span><br>
<span class="quotelev1">&gt; --&gt; Creating Package Info:
</span><br>
<span class="quotelev1">&gt; --&gt; Copying OS X-specific ReadMe into package
</span><br>
<span class="quotelev1">&gt; --&gt; Creating pax file
</span><br>
<span class="quotelev1">&gt; --&gt; Compressing pax file
</span><br>
<span class="quotelev1">&gt; --&gt; Creating bom file
</span><br>
<span class="quotelev1">&gt; --&gt; Generating sizes file:
</span><br>
<span class="quotelev1">&gt; NumFiles 207
</span><br>
<span class="quotelev1">&gt; InstalledSize 7504
</span><br>
<span class="quotelev1">&gt; CompressedSize 7504
</span><br>
<span class="quotelev1">&gt; --&gt; Creating Disc Image
</span><br>
<span class="quotelev1">&gt; --&gt; Copying Package to Disc Image
</span><br>
<span class="quotelev1">&gt; --&gt; Ejecting R/W disk: hdiutil eject /dev/disk2s2&#160; &#160; &#160; &#160;
</span><br>
<span class="quotelev1">&gt; --&gt; Resizing: hdiutil resize  
</span><br>
<span class="quotelev1">&gt; &quot;/tmp/buildpackage-6446/openmpi-1.0rc3RW.dmg&quot; -sectors min
</span><br>
<span class="quotelev1">&gt; --&gt; Converting to R-O: hdiutil convert  
</span><br>
<span class="quotelev1">&gt; &quot;/tmp/buildpackage-6446/openmpi-1.0rc3RW.dmg&quot; -format UDRO -o  
</span><br>
<span class="quotelev1">&gt; &quot;/tmp/openmpi-1.0rc3.dmg&quot;
</span><br>
<span class="quotelev1">&gt; --&gt; Compressing disk image
</span><br>
<span class="quotelev1">&gt; --&gt; Cleaning up the staging directory
</span><br>
<span class="quotelev1">&gt; --&gt; Done.&#160; Package is at: /tmp/openmpi-1.0rc3.dmg.gz
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Ken
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----------------------------------
</span><br>
<span class="quotelev1">&gt; Kenneth Mighell, Associate Scientist&#160; E-mail: .............  
</span><br>
<span class="quotelev1">&gt; mighell_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Kitt Peak National Observatory&#160; &#160;&#160; &#160;&#160; &#160;&#160; &#160;&#160; &#160;&#160; &#160;&#160; &#160;Phone:  
</span><br>
<span class="quotelev1">&gt; .................. 520-318-8391
</span><br>
<span class="quotelev1">&gt; National Optical Astronomy Observatory&#160; &#160;&#160; &#160;Fax: ....................  
</span><br>
<span class="quotelev1">&gt; 520-318-8360
</span><br>
<span class="quotelev1">&gt; P.O. Box 26732, Tucson, AZ&#160; 85726-6732&#160;&#160; URL:  
</span><br>
<span class="quotelev1">&gt; <a href="http://www.noao.edu/staff/mighell">http://www.noao.edu/staff/mighell</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 12, 2005, at 4:13 PM, Ken Mighell wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear Brian,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Previously my CC environment variable was set to cc:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mighell% printenv CC
</span><br>
<span class="quotelev2">&gt;&gt; cc
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I then set the CC environment variable to gcc:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mighell% setenv CC gcc
</span><br>
<span class="quotelev2">&gt;&gt; mighell% printenv CC
</span><br>
<span class="quotelev2">&gt;&gt; gcc
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and then tried to build the package
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mighell% ./buildpackage.sh ~/pkg/openmpi/src/openmpi-1.0rc3.tar.gz  
</span><br>
<span class="quotelev2">&gt;&gt; ~/pkg/openmpi/
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Configuration options:
</span><br>
<span class="quotelev2">&gt;&gt; &#160; Package Name: openmpi
</span><br>
<span class="quotelev2">&gt;&gt; &#160; Prefix: /Users/mighell/pkg/openmpi/
</span><br>
<span class="quotelev2">&gt;&gt; &#160; Boot: ssh
</span><br>
<span class="quotelev2">&gt;&gt; &#160; Config Options: --disable-f77 --without-cs-fs
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Found tarball:  
</span><br>
<span class="quotelev2">&gt;&gt; /Users/mighell/pkg/openmpi/src/openmpi-1.0rc3.tar.gz
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Found OMPI version: 1.0rc3
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Cleaning environment
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Making play space: /tmp/buildpackage-1930
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Copying tarball
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Untarring source: tar xzf openmpi-1.0rc3.tar.gz
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Running configure: ./configure  
</span><br>
<span class="quotelev2">&gt;&gt; --prefix=/Users/mighell/pkg/openmpi/ --with-rsh=ssh --disable-f77  
</span><br>
<span class="quotelev2">&gt;&gt; --without-cs-fs
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Building: make all
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Installing:
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Copying in special files: README  
</span><br>
<span class="quotelev2">&gt;&gt; /Users/mighell/pkg/openmpi/src/openmpi-1.0rc3/contrib/dist/macosx- 
</span><br>
<span class="quotelev2">&gt;&gt; pkg/ReadMe.rtf LICENSE
</span><br>
<span class="quotelev2">&gt;&gt; touch: /disk.out: Permission denied
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Creating Package Info:
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Copying OS X-specific ReadMe into package
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Creating pax file
</span><br>
<span class="quotelev2">&gt;&gt; ./buildpackage.sh: line 259: /disk.out: Permission denied
</span><br>
<span class="quotelev2">&gt;&gt; *** Failed building pax file. Aborting!
</span><br>
<span class="quotelev2">&gt;&gt; *** Check /disk.out for information
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The output file disk.out apparently does not exist; I could not find  
</span><br>
<span class="quotelev2">&gt;&gt; any file called disk.out on my machine.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Ken_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0199.php">Toon Knapen: "Re: [O-MPI users] [Beowulf] MorphMPI based on fortran itf"</a>
<li><strong>Previous message:</strong> <a href="0197.php">Joachim Worringen: "Re: [O-MPI users] [Beowulf] MPI ABI"</a>
<li><strong>In reply to:</strong> <a href="0194.php">Ken Mighell: "Re: [O-MPI users] Building 1.0rc3 on Mac OSX Tiger with macosx-pkg/buildpackage.sh fails on Apple dual G5 tower"</a>
<!-- nextthread="start" -->
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
