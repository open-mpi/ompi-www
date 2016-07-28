<?
$subject_val = "Re: [OMPI users] possibly undefined macro: AC_PROG_LIBTOOL";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  4 07:27:04 2012" -->
<!-- isoreceived="20120104122704" -->
<!-- sent="Wed, 4 Jan 2012 07:26:58 -0500" -->
<!-- isosent="20120104122658" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] possibly undefined macro: AC_PROG_LIBTOOL" -->
<!-- id="47758B99-FCA8-4384-8A3B-453086FAC89A_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3A4C8FB8-3103-4F14-827E-3EC8DFDC30D5_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] possibly undefined macro: AC_PROG_LIBTOOL<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-04 07:26:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18090.php">Jeff Squyres: "[OMPI users] MPI-2 in MX (was: MPI 2 support in sm btl)"</a>
<li><strong>Previous message:</strong> <a href="18088.php">Jeff Squyres: "Re: [OMPI users] MPI::Request::Test not working"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/12/18081.php">Ralph Castain: "Re: [OMPI users] possibly undefined macro: AC_PROG_LIBTOOL"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't know if I've tried explicitly with 2.67, but I'd be surprised if it doesn't recognize AC_PROG_LIBTOOL.  Also note that AC_PROG_LIBTOOL comes from Libtool, not Autoconf.
<br>
<p>FWIW, I've seen this kind of error when AC/AM/LT are not installed to the same tree.  If they're installed to different trees (i.e., with a different --prefix value when you run configure to install them), you'll almost certainly run into this kind of problem.
<br>
<p>I'm not sure how Debian Squeeze installs the autotools packages, but if it supports multiple backports of those same packages simultaneously, they could well be installed to different directories, and therefore there might be some restrictions on installing / using them correctly.
<br>
<p>FWIW, I just FTP those 4 packages separately from my OS (AC, AM, LT, M4) and configure/make install them myself to a separate side directory (e.g., $HOME/autotools).  That prevents all these kind of OS packaging issues.
<br>
<p><p>On Dec 29, 2011, at 7:24 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; I use 2.68 and 2.65 and have no problems. Could be that 2.67 has a problem - perhaps try with one of the other levels?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 29, 2011, at 5:14 PM, Dmitry N. Mikushin wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; OK, apparently that were various backports. And now I have only one
</span><br>
<span class="quotelev2">&gt;&gt; autoconf installed, and it is:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; marcusmae_at_teslatron:~/Programming/openmpi-r24785$ autoconf --version
</span><br>
<span class="quotelev2">&gt;&gt; autoconf (GNU Autoconf) 2.67
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; marcusmae_at_teslatron:~/Programming/openmpi-r24785$ autoreconf --version
</span><br>
<span class="quotelev2">&gt;&gt; autoreconf (GNU Autoconf) 2.67
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; However:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 6. Processing autogen.subdirs directories
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; === Processing subdir:
</span><br>
<span class="quotelev2">&gt;&gt; /home/marcusmae/Programming/openmpi-r24785/opal/mca/event/libevent207/libevent
</span><br>
<span class="quotelev2">&gt;&gt; --- Found autogen.sh; running...
</span><br>
<span class="quotelev2">&gt;&gt; autoreconf: Entering directory `.'
</span><br>
<span class="quotelev2">&gt;&gt; autoreconf: configure.in: not using Gettext
</span><br>
<span class="quotelev2">&gt;&gt; autoreconf: running: aclocal --force -I m4
</span><br>
<span class="quotelev2">&gt;&gt; autoreconf: configure.in: tracing
</span><br>
<span class="quotelev2">&gt;&gt; autoreconf: configure.in: not using Libtool
</span><br>
<span class="quotelev2">&gt;&gt; autoreconf: running: /usr/bin/autoconf --force
</span><br>
<span class="quotelev2">&gt;&gt; configure.in:113: error: possibly undefined macro: AC_PROG_LIBTOOL
</span><br>
<span class="quotelev2">&gt;&gt;     If this token and others are legitimate, please use m4_pattern_allow.
</span><br>
<span class="quotelev2">&gt;&gt;     See the Autoconf documentation.
</span><br>
<span class="quotelev2">&gt;&gt; autoreconf: /usr/bin/autoconf failed with exit status: 1
</span><br>
<span class="quotelev2">&gt;&gt; Command failed: ./autogen.sh
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Does it work for you with 2.67?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; - D.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2011/12/30 Ralph Castain &lt;rhc_at_[hidden]&gt;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Dec 29, 2011, at 3:39 PM, Dmitry N. Mikushin wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; No, that was autoREconf, and all they are below 2.65:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; marcusmae_at_teslatron:~/Programming/openmpi-r24785$ ls /usr/bin/autoreconf
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; autoreconf      autoreconf2.13  autoreconf2.50  autoreconf2.59  autoreconf2.64
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; And default one points to 2.50:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; marcusmae_at_teslatron:~/Programming/openmpi-r24785$ autoreconf -help
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Usage: /usr/bin/autoreconf2.50 [OPTION]... [DIRECTORY]...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I don't know why, probably that's the default Debian Squeeze setup?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Probably - but that's no good. It should be the same level as autoconf as the two are packaged together to avoid incompatibilities like you are hitting here. Did you install autoconf yourself? If so, can you point autoreconf to the corresponding binary?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - D.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2011/12/30 Ralph Castain &lt;rhc_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Strange - if you look at your original output, autoconf is identified as 2.50 - a version that is way too old for us. However, what you just sent now shows 2.67, which would be fine.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Why the difference?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Dec 29, 2011, at 3:27 PM, Dmitry N. Mikushin wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; URL: <a href="http://svn.open-mpi.org/svn/ompi/trunk">http://svn.open-mpi.org/svn/ompi/trunk</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Repository Root: <a href="http://svn.open-mpi.org/svn/ompi">http://svn.open-mpi.org/svn/ompi</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Repository UUID: 63e3feb5-37d5-0310-a306-e8a459e722fe
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Revision: 24785
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Node Kind: directory
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Schedule: normal
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Last Changed Author: rhc
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Last Changed Rev: 24785
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Last Changed Date: 2011-06-17 22:01:23 +0400 (Fri, 17 Jun 2011)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 1. Checking tool versions
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  Searching for autoconf
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;    Found autoconf version 2.67; checking version...
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      Found version component 2 -- need 2
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      Found version component 67 -- need 65
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;    ==&gt; ACCEPTED
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  Searching for libtoolize
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;    Found libtoolize version 2.2.6b; checking version...
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      Found version component 2 -- need 2
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      Found version component 2 -- need 2
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      Found version component 6b -- need 6b
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;    ==&gt; ACCEPTED
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  Searching for automake
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;    Found automake version 1.11.1; checking version...
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      Found version component 1 -- need 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      Found version component 11 -- need 11
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      Found version component 1 -- need 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;    ==&gt; ACCEPTED
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 2011/12/30 Ralph Castain &lt;rhc_at_[hidden]&gt;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Are you doing this on a subversion checkout? Of which branch?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Did you check your autotoll versions to ensure you meet the minimum required levels? The requirements differ by version.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Dec 29, 2011, at 2:52 PM, Dmitry N. Mikushin wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Dear Open MPI Community,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I need a custom OpenMPI build. While running ./autogen.pl on Debian
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Squeeze, there is an error:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --- Found autogen.sh; running...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; autoreconf2.50: Entering directory `.'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; autoreconf2.50: configure.in: not using Gettext
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; autoreconf2.50: running: aclocal --force -I m4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; autoreconf2.50: configure.in: tracing
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; autoreconf2.50: configure.in: not using Libtool
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; autoreconf2.50: running: /usr/bin/autoconf --force
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; configure.in:113: error: possibly undefined macro: AC_PROG_LIBTOOL
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;     If this token and others are legitimate, please use m4_pattern_allow.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;     See the Autoconf documentation.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; autoreconf2.50: /usr/bin/autoconf failed with exit status: 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Command failed: ./autogen.sh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; It's a bit confusing, because automake, libtool, autoconf are
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; installed. What might be the other reasons of this error?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; - Dima.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
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
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18090.php">Jeff Squyres: "[OMPI users] MPI-2 in MX (was: MPI 2 support in sm btl)"</a>
<li><strong>Previous message:</strong> <a href="18088.php">Jeff Squyres: "Re: [OMPI users] MPI::Request::Test not working"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/12/18081.php">Ralph Castain: "Re: [OMPI users] possibly undefined macro: AC_PROG_LIBTOOL"</a>
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
