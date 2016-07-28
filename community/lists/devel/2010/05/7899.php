<?
$subject_val = "Re: [OMPI devel] malloc(0) warnings";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  6 19:00:03 2010" -->
<!-- isoreceived="20100506230003" -->
<!-- sent="Thu, 06 May 2010 17:59:45 -0500" -->
<!-- isosent="20100506225945" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] malloc(0) warnings" -->
<!-- id="4BE349E1.4070702_at_cs.uh.edu" -->
<!-- charset="KOI8-R" -->
<!-- inreplyto="E5132FAA-D03A-4647-9F6E-8B924723D9BD_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] malloc(0) warnings<br>
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-06 18:59:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7900.php">Kawashima: "Re: [OMPI devel] Thread safety levels"</a>
<li><strong>Previous message:</strong> <a href="7898.php">George Bosilca: "Re: [OMPI devel] malloc(0) warnings"</a>
<li><strong>In reply to:</strong> <a href="7898.php">George Bosilca: "Re: [OMPI devel] malloc(0) warnings"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'll look into it in the next couple of days.
<br>
Thanks
<br>
Edgar
<br>
<p>George Bosilca wrote:
<br>
<span class="quotelev1">&gt; This is an artifact of using the gatherv (or the scatterv) on an inter-communicator without any useful data (i.e. either count of zero or empty datatypes). Looks more like a synchronization than a real operation. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 5, 2010, at 20:17 , Lisandro Dalcin wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; After building 1.4.2 with debug flags to configure, I get this (I've
</span><br>
<span class="quotelev2">&gt;&gt; got these warnings in previous releases, too):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; malloc debug: Request for 0 bytes (coll_inter_gatherv.c, 94)
</span><br>
<span class="quotelev2">&gt;&gt; malloc debug: Request for 0 bytes (coll_inter_gatherv.c, 94)
</span><br>
<span class="quotelev2">&gt;&gt; malloc debug: Request for 0 bytes (coll_inter_gatherv.c, 94)
</span><br>
<span class="quotelev2">&gt;&gt; malloc debug: Request for 0 bytes (coll_inter_gatherv.c, 94)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; malloc debug: Request for 0 bytes (coll_inter_scatterv.c, 82)
</span><br>
<span class="quotelev2">&gt;&gt; malloc debug: Request for 0 bytes (coll_inter_scatterv.c, 82)
</span><br>
<span class="quotelev2">&gt;&gt; malloc debug: Request for 0 bytes (coll_inter_scatterv.c, 82)
</span><br>
<span class="quotelev2">&gt;&gt; malloc debug: Request for 0 bytes (coll_inter_scatterv.c, 82)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Lisandro Dalcin
</span><br>
<span class="quotelev2">&gt;&gt; ---------------
</span><br>
<span class="quotelev2">&gt;&gt; CIMEC (INTEC/CONICET-UNL)
</span><br>
<span class="quotelev2">&gt;&gt; Predio CONICET-Santa Fe
</span><br>
<span class="quotelev2">&gt;&gt; Colectora RN 168 Km 472, Paraje El Pozo
</span><br>
<span class="quotelev2">&gt;&gt; Tel: +54-342-4511594 (ext 1011)
</span><br>
<span class="quotelev2">&gt;&gt; Tel/Fax: +54-342-4511169
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Return-Path: &lt;svn-bounces_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; X-Original-To: gabriel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Delivered-To: gabriel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Received: from localhost (dijkstra.cs.uh.edu [127.0.0.1])
</span><br>
<span class="quotelev1">&gt; 	by dijkstra.cs.uh.edu (Postfix) with ESMTP id EFAA223CB74;
</span><br>
<span class="quotelev1">&gt; 	Thu,  6 May 2010 15:57:22 -0500 (CDT)
</span><br>
<span class="quotelev1">&gt; X-Virus-Scanned: amavisd-new at cs.uh.edu
</span><br>
<span class="quotelev1">&gt; Received: from dijkstra.cs.uh.edu ([127.0.0.1])
</span><br>
<span class="quotelev1">&gt; 	by localhost (dijkstra.cs.uh.edu [127.0.0.1]) (amavisd-new, port 10024)
</span><br>
<span class="quotelev1">&gt; 	with ESMTP id yimyxDvtFBmi; Thu,  6 May 2010 15:57:21 -0500 (CDT)
</span><br>
<span class="quotelev1">&gt; Received: from milliways.osl.iu.edu (milliways.osl.iu.edu [129.79.245.239])
</span><br>
<span class="quotelev1">&gt; 	by dijkstra.cs.uh.edu (Postfix) with ESMTP id 4508323CB70;
</span><br>
<span class="quotelev1">&gt; 	Thu,  6 May 2010 15:57:20 -0500 (CDT)
</span><br>
<span class="quotelev1">&gt; Received: from milliways.osl.iu.edu (localhost [127.0.0.1])
</span><br>
<span class="quotelev1">&gt; 	by milliways.osl.iu.edu (8.13.1/8.13.1/IUCS_2.92) with ESMTP id o46KvK3G020072;
</span><br>
<span class="quotelev1">&gt; 	Thu, 6 May 2010 16:57:20 -0400
</span><br>
<span class="quotelev1">&gt; Received: from sourcehaven.osl.iu.edu (sourcehaven.osl.iu.edu [129.79.245.235])
</span><br>
<span class="quotelev1">&gt; 	by milliways.osl.iu.edu (8.13.1/8.13.1/IUCS_2.92) with ESMTP id
</span><br>
<span class="quotelev1">&gt; 	o46KvITp020066 for &lt;svn_at_[hidden]&gt;; Thu, 6 May 2010 16:57:18 -0400
</span><br>
<span class="quotelev1">&gt; Received: from sourcehaven.osl.iu.edu (localhost [127.0.0.1])
</span><br>
<span class="quotelev1">&gt; 	by sourcehaven.osl.iu.edu (8.13.1/8.13.1/NULLCLIENT_1.7) with ESMTP id
</span><br>
<span class="quotelev1">&gt; 	o46KvIjb002462 for &lt;svn_at_[hidden]&gt;; Thu, 6 May 2010 16:57:18 -0400
</span><br>
<span class="quotelev1">&gt; Received: (from apache_at_localhost)
</span><br>
<span class="quotelev1">&gt; 	by sourcehaven.osl.iu.edu (8.13.1/8.13.1/Submit) id o46KvHti002438
</span><br>
<span class="quotelev1">&gt; 	for svn_at_[hidden]; Thu, 6 May 2010 16:57:17 -0400
</span><br>
<span class="quotelev1">&gt; Date: Thu, 6 May 2010 16:57:17 -0400
</span><br>
<span class="quotelev1">&gt; Message-Id: &lt;201005062057.o46KvHti002438_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; X-Authentication-Warning: sourcehaven.osl.iu.edu: apache set sender to
</span><br>
<span class="quotelev1">&gt; 	rhc_at_[hidden] using -f
</span><br>
<span class="quotelev1">&gt; From: rhc_at_[hidden]
</span><br>
<span class="quotelev1">&gt; To: svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; MIME-Version: 1.0
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI svn] svn:open-mpi r23106
</span><br>
<span class="quotelev1">&gt; X-BeenThere: svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; X-Mailman-Version: 2.1.11rc1
</span><br>
<span class="quotelev1">&gt; Precedence: list
</span><br>
<span class="quotelev1">&gt; Reply-To: devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; List-Id: Open MPI SVN activity &lt;svn.open-mpi.org&gt;
</span><br>
<span class="quotelev1">&gt; List-Unsubscribe: &lt;<a href="http://www.open-mpi.org/mailman/options.cgi/svn">http://www.open-mpi.org/mailman/options.cgi/svn</a>&gt;,
</span><br>
<span class="quotelev1">&gt; 	&lt;mailto:svn-request_at_[hidden]?subject=unsubscribe&gt;
</span><br>
<span class="quotelev1">&gt; List-Post: &lt;mailto:svn_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; List-Help: &lt;mailto:svn-request_at_[hidden]?subject=help&gt;
</span><br>
<span class="quotelev1">&gt; List-Subscribe: &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>&gt;,
</span><br>
<span class="quotelev1">&gt; 	&lt;mailto:svn-request_at_[hidden]?subject=subscribe&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;us-ascii&quot;
</span><br>
<span class="quotelev1">&gt; Content-Transfer-Encoding: 7bit
</span><br>
<span class="quotelev1">&gt; Sender: svn-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Errors-To: svn-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Status: O
</span><br>
<span class="quotelev1">&gt; X-UID: 88090
</span><br>
<span class="quotelev1">&gt; Content-Length: 1900
</span><br>
<span class="quotelev1">&gt; X-Keywords:                                                                                                    
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Author: rhc
</span><br>
<span class="quotelev1">&gt; Date: 2010-05-06 16:57:17 EDT (Thu, 06 May 2010)
</span><br>
<span class="quotelev1">&gt; New Revision: 23106
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/23106">https://svn.open-mpi.org/trac/ompi/changeset/23106</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; More cleanup on paffinity....groan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It is okay to not have a paffinity module IF you aren't using paffinity anyway. So don't error out of MPI_Init because a paffinity module wasn't selected.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cleanup error reporting in the odls default module to (once and for all!) eliminate messages originating in the fork'd process. Create some new error codes to allow us to pass enough info back to the parent process to provide useful error messages.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;    trunk/opal/include/opal/constants.h                     |    63 +++++++-----                            
</span><br>
<span class="quotelev1">&gt;    trunk/opal/mca/paffinity/base/paffinity_base_select.c   |    17 +-                                      
</span><br>
<span class="quotelev1">&gt;    trunk/opal/mca/paffinity/base/paffinity_base_service.c  |    72 +++----------                           
</span><br>
<span class="quotelev1">&gt;    trunk/opal/mca/paffinity/base/paffinity_base_wrappers.c |    20 +-                                      
</span><br>
<span class="quotelev1">&gt;    trunk/opal/runtime/opal_init.c                          |    32 +++++                                   
</span><br>
<span class="quotelev1">&gt;    trunk/orte/include/orte/constants.h                     |    79 ++++++++------                          
</span><br>
<span class="quotelev1">&gt;    trunk/orte/mca/odls/default/help-odls-default.txt       |    34 ++++-                                   
</span><br>
<span class="quotelev1">&gt;    trunk/orte/mca/odls/default/odls_default_module.c       |   206 ++++++++++++++++----------------------- 
</span><br>
<span class="quotelev1">&gt;    trunk/orte/util/error_strings.c                         |     3                                         
</span><br>
<span class="quotelev1">&gt;    9 files changed, 256 insertions(+), 270 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Diff not shown due to size (56064 bytes).
</span><br>
<span class="quotelev1">&gt; To see the diff, run the following command:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	svn diff -r 23105:23106 --no-diff-deleted
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn mailing list
</span><br>
<span class="quotelev1">&gt; svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<span class="quotelev1">&gt; Return-Path: &lt;wesner_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; X-Original-To: gabriel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Delivered-To: gabriel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Received: from localhost (dijkstra.cs.uh.edu [127.0.0.1])
</span><br>
<span class="quotelev1">&gt; 	by dijkstra.cs.uh.edu (Postfix) with ESMTP id 0482623CB76
</span><br>
<span class="quotelev1">&gt; 	for &lt;gabriel_at_[hidden]&gt;; Thu,  6 May 2010 16:12:34 -0500 (CDT)
</span><br>
<span class="quotelev1">&gt; X-Virus-Scanned: amavisd-new at cs.uh.edu
</span><br>
<span class="quotelev1">&gt; Received: from dijkstra.cs.uh.edu ([127.0.0.1])
</span><br>
<span class="quotelev1">&gt; 	by localhost (dijkstra.cs.uh.edu [127.0.0.1]) (amavisd-new, port 10024)
</span><br>
<span class="quotelev1">&gt; 	with ESMTP id qeP868W347GH for &lt;gabriel_at_[hidden]&gt;;
</span><br>
<span class="quotelev1">&gt; 	Thu,  6 May 2010 16:12:30 -0500 (CDT)
</span><br>
<span class="quotelev1">&gt; Received: from mail.hlrs.de (mail.hlrs.de [141.58.2.50])
</span><br>
<span class="quotelev1">&gt; 	by dijkstra.cs.uh.edu (Postfix) with ESMTP id 4F0CB23CB0B
</span><br>
<span class="quotelev1">&gt; 	for &lt;gabriel_at_[hidden]&gt;; Thu,  6 May 2010 16:12:30 -0500 (CDT)
</span><br>
<span class="quotelev1">&gt; Received: from localhost (localhost [127.0.0.1])
</span><br>
<span class="quotelev1">&gt; 	by mail.hlrs.de (Postfix) with ESMTP id C959F680A01A;
</span><br>
<span class="quotelev1">&gt; 	Thu,  6 May 2010 23:12:26 +0200 (CEST)
</span><br>
<span class="quotelev1">&gt; X-Virus-Scanned: amavisd-new at hlrs.de
</span><br>
<span class="quotelev1">&gt; Received: from mail.hlrs.de ([127.0.0.1])
</span><br>
<span class="quotelev1">&gt; 	by localhost (mail.hlrs.de [127.0.0.1]) (amavisd-new, port 10024)
</span><br>
<span class="quotelev1">&gt; 	with ESMTP id tcgSAU+RQ0RV; Thu,  6 May 2010 23:12:26 +0200 (CEST)
</span><br>
<span class="quotelev1">&gt; Received: from [192.168.121.3] (unknown [213.178.173.108])
</span><br>
<span class="quotelev1">&gt; 	by mail.hlrs.de (Postfix) with ESMTPSA id 3DC3E680A016;
</span><br>
<span class="quotelev1">&gt; 	Thu,  6 May 2010 23:12:25 +0200 (CEST)
</span><br>
<span class="quotelev1">&gt; Subject: Re: EuroMPI2010
</span><br>
<span class="quotelev1">&gt; Mime-Version: 1.0 (Apple Message framework v1078)
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=iso-8859-1
</span><br>
<span class="quotelev1">&gt; From: Stefan Wesner &lt;wesner_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; In-Reply-To: &lt;9971474.4448.1273174128565.JavaMail.root_at_epsilon&gt;
</span><br>
<span class="quotelev1">&gt; Date: Thu, 6 May 2010 23:12:22 +0200
</span><br>
<span class="quotelev1">&gt; Cc: Edgar Gabriel &lt;gabriel_at_[hidden]&gt;,
</span><br>
<span class="quotelev1">&gt;  Edgar Gabriel &lt;egabriel_at_[hidden]&gt;,
</span><br>
<span class="quotelev1">&gt;  Rainer Keller &lt;keller_at_[hidden]&gt;,
</span><br>
<span class="quotelev1">&gt;  EuroMPI2010 &lt;eurompi2010_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Transfer-Encoding: quoted-printable
</span><br>
<span class="quotelev1">&gt; Message-Id: &lt;5D05A0B7-9AF7-46D1-B6EB-66670CF32A29_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; References: &lt;9971474.4448.1273174128565.JavaMail.root_at_epsilon&gt;
</span><br>
<span class="quotelev1">&gt; To: Rolf Rabenseifner &lt;rabenseifner_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; X-Mailer: Apple Mail (2.1078)
</span><br>
<span class="quotelev1">&gt; Status: O
</span><br>
<span class="quotelev1">&gt; X-UID: 88091
</span><br>
<span class="quotelev1">&gt; Content-Length: 9229
</span><br>
<span class="quotelev1">&gt; X-Keywords:                                                                                                    
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; warum auch immer ist als forward ermail adresse keller_at_[hidden] =
</span><br>
<span class="quotelev1">&gt; konfiguriert...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Stefan.
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Dr.-Ing. Stefan Wesner
</span><br>
<span class="quotelev1">&gt; Deputy Director, Head of Applications &amp; Visualization
</span><br>
<span class="quotelev1">&gt; High Performance Computing Center of University Stuttgart
</span><br>
<span class="quotelev1">&gt; Nobelstrasse 19, D-70569 Stuttgart, Germany
</span><br>
<span class="quotelev1">&gt; Phone: +49 711-685 6 4275
</span><br>
<span class="quotelev1">&gt; Mobile: +49 172 1354054
</span><br>
<span class="quotelev1">&gt; Fax: +49 711-685 5 4275
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 06.05.2010, at 21:28, Rolf Rabenseifner wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hallo Edgar,
</span><br>
<span class="quotelev2">&gt;&gt; =20
</span><br>
<span class="quotelev2">&gt;&gt; Cool, ich habe soeben Review-Paper-20 hochgeladen.
</span><br>
<span class="quotelev2">&gt;&gt; Es funktioniert sogar ohne neues Einloggen.
</span><br>
<span class="quotelev2">&gt;&gt; Bekommst Du nun auch die Mails an eurompi2010_at_[hidden] ?
</span><br>
<span class="quotelev2">&gt;&gt; =20
</span><br>
<span class="quotelev2">&gt;&gt; Besten Dank.
</span><br>
<span class="quotelev2">&gt;&gt; Rolf
</span><br>
<span class="quotelev2">&gt;&gt; =20
</span><br>
<span class="quotelev2">&gt;&gt; ----- Original Message -----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ich glaube ich sehe das Problem:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =20
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Bei der Konfiguration gibt es den Menupunkt 'Can non-chairs add or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; modify reviews', und das war auf 'no' gesetzt. Ich habe es jetzt mal
</span><br>
<span class="quotelev3">&gt;&gt;&gt; auf 'yes' gesetzt, mich als Rolf eingeloggt, und jetzt ist der
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Menupunkt zum
</span><br>
<span class="quotelev3">&gt;&gt;&gt; uploaden der papers da.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =20
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Viele Gruesse
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Edgar
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =20
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Rolf Rabenseifner wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Danke Edgar,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; =20
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Und Ihr solltet vielleicht auch schauen, ob noch weitere Mails an
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; eurompi2010_at_[hidden] einfach unbeantwortet blieben,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; oder ob meine die einzige war.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Und warum sie bei Dir, Edgar nicht ankommen.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; =20
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Viele Gr=FC=DFe
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Rolf
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; =20
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ----- Original Message -----
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; yep, ich habe weitere Menupunkte.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; =20
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Ich habe mich aber als ein anderes Mitglied des Program Kommittees
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; eingeloggt, und der Punkt scheint in der Tat zu fehlen.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Rainer/Stefan, da Ihr den Premium service fuer Easychair bezahlt
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; habt, kann einer von
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; euch mal die Leute anpingen was da falsch ist?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; =20
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Viele Gruesse
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Edgar
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; =20
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Rolf Rabenseifner wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hallo Edgar,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; =20
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; danke bzgl. Pap23.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; =20
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Bzgl. Upload:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; =20
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Diesen Menue-Punkt gibt es bei mir nicht!!!!!!!!!
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; =20
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Im Menue &quot;Reviews&quot; gibt es als Pop-up und als Webpage folgende
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Punkte:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.easychair.org/conferences/review.cgi?a=3Dp0266d40517a">http://www.easychair.org/conferences/review.cgi?a=3Dp0266d40517a</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; =20
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  Reviews
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  Select one of the following options.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; =20
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  - Reviews on papers assigned to me
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  - Download offline review forms
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  - Subreviewers
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; =20
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Sieht die Seite bei Dir anders aus?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; =20
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Sch=F6ne Gr=FC=DFe
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Rolf
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; =20
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ----- Original Message -----
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hallo Rolf,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; =20
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Rolf Rabenseifner wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hallo Stefan, Rainer und Edgar,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; =20
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ich wei=DF nicht, ob meine Mails an eurompi2010_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; wirklich irgendwo ankommen - daher nun auch direkt an Euch.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; hm, ich habe um ehrlich zu sein keine email gesehen von Dir. Tut
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; die eurompi2010_at_[hidden] wirklich die emails an uns
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; verschicken, oder
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; wohing gehen sie? Ich sehe auch nichts in den spam filtern.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; =20
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 2 Probleme:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; =20
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; - bei
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.easychair.org/conferences/review.cgi?a=3Dp0266d40517a">http://www.easychair.org/conferences/review.cgi?a=3Dp0266d40517a</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  d.h. unter &quot;Reviews&quot; bzw. &quot;My papers&quot; finde ich keine
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  M=F6glichkeit meinen Review abzuliefern, d.h. diese
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  reviews_form.txt files.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  Falls ich nicht nur zu dumm bin, die offensichtliche Stelle
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  sofort zu sehen, dann sollte dieses Problem Eurerseits
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  m=F6glichst schnell gel=F6st werden, da es dann wahrscheinlich =
</span><br>
<span class="quotelev1">&gt; das
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  gesmte Program Committee betrifft.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Ich habe gerade probiert, wenn Du bei Revies auf den Knopf
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 'Upload reviews' gehst, kannst Du die Form hochladen. Das scheint
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; zu tun.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; =20
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; - Das Paper 23 ist immernoch nicht in meiner &quot;Reviews--&gt;my
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; papers&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  Liste wieder sichtbar, siehe angeh=E4ngte Mail, zu der ich nie
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  eine Antwort bekam.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  (H=E4tte sie vielleicht in Deutsch schreiben sollen,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  aber ich wei=DF nicht, wer alles auf eurompi2010_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  eingetragen ist.)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; done, paper 23 ist zusaetzlich fuer Dich eingetragen.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Normalerweise protestieren wir nicht wenn jemand freiwillig mehr
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Arbeit leisten
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; moechte.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; =20
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Viele Gruesse
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Edgar
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; =20
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; =20
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Sch=F6ne Gr=FC=DFe
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Rolf
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; =20
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; =20
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ----- Original Message -----
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; =20
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I did not receive any answer within the last 3 days.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I expect that you are in a state where you are not
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; able to make further changes without problems.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Therefore, I'll review the currently assigned papers 20 and 22.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Please assign also the paper 23 to me because I've
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; already done parts of the review.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; =20
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I need the decision because I'm flying many hours
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; next week, which is always a good time for reviewing.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; =20
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Best regards and happy weekend
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Rolf
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; =20
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ----- Original Message (Apr. 27) -----
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi Stefan, Rainer, Edgar,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; =20
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I started already yesterday to review paper 23.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Yesterday, I was assigned to papers 22, 23, and 24.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; =20
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Papers in my main area of expertise are:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; - 23 (area of my PhD and work in last 3 years),
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; - 2, 10 (related to my work of optimization of
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; collective reduction operations).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; =20
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; An additional conflict is paper 21, because Rainer is
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; a direct colleague at HLRS. I entered this conflict into
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; EasyChair database and therefore, the paper was removed
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; from my review list.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; =20
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; It would be nice,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; - if I can get back paper 23 for review.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; - if you can substitute papers 20+22 by 2+10.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; =20
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Best regards
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Rolf
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; =20
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; =20
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ----- Original Message -----
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Dear Rolf,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the papers of the EuroMPI2010 conference have been assigned
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; to the PC members. Please make sure, that the automatic
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; conflict detection worked fine.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; =20
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; We kindly ask you to please log into EasyChair
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (<a href="http://www.easychair.org">http://www.easychair.org</a>) to check &amp; download Your assigned
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; papers and notify us of further conflicts by
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 30th of April.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; =20
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; =20
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; We would like to encourage a discussion on on papers where
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the reviews show different opinions.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Therefore we would like to ask You to please submit Your
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; review by 12th of May
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; to be able to make the deadline for the notification of
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; authors on 20th of May.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; If you cannot proceed with the review or this is not
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; convenient for you please do not hesitate to contact us and
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; we will submit
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the papers to another reviewer.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; =20
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; The review process will be open but anonymous -- You should
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; be able to see other reviewers input, after you have
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; submitted your review. If you have any questions, please do
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; not hesitate
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; to contact us.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; =20
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thank you very much.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; =20
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Best regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the Program Chairs of EuroMPI 2010.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -- Dr. Rolf Rabenseifner . . . . . . . . . .. email
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; rabenseifner_at_[hidden] High Performance Computing Center (HLRS)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; . phone ++49(0)711/685-65530 University of Stuttgart . . . . .
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; . .
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; . .. fax
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ++49(0)711 / 685-65832
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Head of Dpmt Parallel Computing . . .
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; www.hlrs.de/people/rabenseifner Nobelstr. 19, D-70550
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Stuttgart, Germany . (Office: Allmandring 30)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -- Dr. Rolf Rabenseifner . . . . . . . . . .. email
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; rabenseifner_at_[hidden] High Performance Computing Center (HLRS) .
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; phone ++49(0)711/685-65530 University of Stuttgart . . . . . .
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; . . .. fax
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ++49(0)711 / 685-65832
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Head of Dpmt Parallel Computing . . .
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; www.hlrs.de/people/rabenseifner Nobelstr. 19, D-70550
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Stuttgart, Germany . (Office: Allmandring 30)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; -- Edgar Gabriel
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Assistant Professor
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Parallel Software Technologies Lab <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Department of Computer Science University of Houston
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Philip G. Hoffman Hall, Room 524 Houston, TX-77204, USA
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Tel: +1 (713) 743-3857 Fax: +1 (713) 743-3335
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -- Edgar Gabriel
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Assistant Professor
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Parallel Software Technologies Lab <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Department of Computer Science University of Houston
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Philip G. Hoffman Hall, Room 524 Houston, TX-77204, USA
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Tel: +1 (713) 743-3857 Fax: +1 (713) 743-3335
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; =20
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =20
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- Edgar Gabriel
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Assistant Professor
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Parallel Software Technologies Lab <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Department of Computer Science University of Houston
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Philip G. Hoffman Hall, Room 524 Houston, TX-77204, USA
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tel: +1 (713) 743-3857 Fax: +1 (713) 743-3335
</span><br>
<span class="quotelev2">&gt;&gt; =20
</span><br>
<span class="quotelev2">&gt;&gt; --=20
</span><br>
<span class="quotelev2">&gt;&gt; Dr. Rolf Rabenseifner . . . . . . . . . .. email rabenseifner_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; High Performance Computing Center (HLRS) . phone ++49(0)711/685-65530
</span><br>
<span class="quotelev2">&gt;&gt; University of Stuttgart . . . . . . . . .. fax ++49(0)711 / 685-65832
</span><br>
<span class="quotelev2">&gt;&gt; Head of Dpmt Parallel Computing . . . www.hlrs.de/people/rabenseifner
</span><br>
<span class="quotelev2">&gt;&gt; Nobelstr. 19, D-70550 Stuttgart, Germany . (Office: Allmandring 30)
</span><br>
<span class="quotelev1">&gt; Return-Path: &lt;wesner_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; X-Original-To: gabriel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Delivered-To: gabriel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Received: from localhost (dijkstra.cs.uh.edu [127.0.0.1])
</span><br>
<span class="quotelev1">&gt; 	by dijkstra.cs.uh.edu (Postfix) with ESMTP id BDAAA23CB0B
</span><br>
<span class="quotelev1">&gt; 	for &lt;gabriel_at_[hidden]&gt;; Thu,  6 May 2010 16:12:34 -0500 (CDT)
</span><br>
<span class="quotelev1">&gt; X-Virus-Scanned: amavisd-new at cs.uh.edu
</span><br>
<span class="quotelev1">&gt; Received: from dijkstra.cs.uh.edu ([127.0.0.1])
</span><br>
<span class="quotelev1">&gt; 	by localhost (dijkstra.cs.uh.edu [127.0.0.1]) (amavisd-new, port 10024)
</span><br>
<span class="quotelev1">&gt; 	with ESMTP id f04bIjpkp-Kp for &lt;gabriel_at_[hidden]&gt;;
</span><br>
<span class="quotelev1">&gt; 	Thu,  6 May 2010 16:12:32 -0500 (CDT)
</span><br>
<span class="quotelev1">&gt; Received: from smtp3.cc.uh.edu (smtp3.cc.uh.edu [129.7.234.210])
</span><br>
<span class="quotelev1">&gt; 	by dijkstra.cs.uh.edu (Postfix) with ESMTP id B40A123CB53
</span><br>
<span class="quotelev1">&gt; 	for &lt;gabriel_at_[hidden]&gt;; Thu,  6 May 2010 16:12:32 -0500 (CDT)
</span><br>
<span class="quotelev1">&gt; Received: from smtp3.cc.uh.edu (smtp3.cc.uh.edu [127.0.0.1])
</span><br>
<span class="quotelev1">&gt; 	by localhost (Postfix) with SMTP id 9FF5455F024A
</span><br>
<span class="quotelev1">&gt; 	for &lt;gabriel_at_[hidden]&gt;; Thu,  6 May 2010 16:12:32 -0500 (CDT)
</span><br>
<span class="quotelev1">&gt; Received: from mail.hlrs.de (mail.hlrs.de [141.58.2.50])
</span><br>
<span class="quotelev1">&gt; 	by smtp3.cc.uh.edu (Postfix) with ESMTP id DA68455F0246
</span><br>
<span class="quotelev1">&gt; 	for &lt;egabriel_at_[hidden]&gt;; Thu,  6 May 2010 16:12:31 -0500 (CDT)
</span><br>
<span class="quotelev1">&gt; Received: from localhost (localhost [127.0.0.1])
</span><br>
<span class="quotelev1">&gt; 	by mail.hlrs.de (Postfix) with ESMTP id C959F680A01A;
</span><br>
<span class="quotelev1">&gt; 	Thu,  6 May 2010 23:12:26 +0200 (CEST)
</span><br>
<span class="quotelev1">&gt; X-Virus-Scanned: amavisd-new at hlrs.de
</span><br>
<span class="quotelev1">&gt; Received: from mail.hlrs.de ([127.0.0.1])
</span><br>
<span class="quotelev1">&gt; 	by localhost (mail.hlrs.de [127.0.0.1]) (amavisd-new, port 10024)
</span><br>
<span class="quotelev1">&gt; 	with ESMTP id tcgSAU+RQ0RV; Thu,  6 May 2010 23:12:26 +0200 (CEST)
</span><br>
<span class="quotelev1">&gt; Received: from [192.168.121.3] (unknown [213.178.173.108])
</span><br>
<span class="quotelev1">&gt; 	by mail.hlrs.de (Postfix) with ESMTPSA id 3DC3E680A016;
</span><br>
<span class="quotelev1">&gt; 	Thu,  6 May 2010 23:12:25 +0200 (CEST)
</span><br>
<span class="quotelev1">&gt; Subject: Re: EuroMPI2010
</span><br>
<span class="quotelev1">&gt; Mime-Version: 1.0 (Apple Message framework v1078)
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=iso-8859-1
</span><br>
<span class="quotelev1">&gt; From: Stefan Wesner &lt;wesner_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; In-Reply-To: &lt;9971474.4448.1273174128565.JavaMail.root_at_epsilon&gt;
</span><br>
<span class="quotelev1">&gt; Date: Thu, 6 May 2010 23:12:22 +0200
</span><br>
<span class="quotelev1">&gt; Cc: Edgar Gabriel &lt;gabriel_at_[hidden]&gt;,
</span><br>
<span class="quotelev1">&gt;  Edgar Gabriel &lt;egabriel_at_[hidden]&gt;,
</span><br>
<span class="quotelev1">&gt;  Rainer Keller &lt;keller_at_[hidden]&gt;,
</span><br>
<span class="quotelev1">&gt;  EuroMPI2010 &lt;eurompi2010_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Transfer-Encoding: quoted-printable
</span><br>
<span class="quotelev1">&gt; Message-Id: &lt;5D05A0B7-9AF7-46D1-B6EB-66670CF32A29_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; References: &lt;9971474.4448.1273174128565.JavaMail.root_at_epsilon&gt;
</span><br>
<span class="quotelev1">&gt; To: Rolf Rabenseifner &lt;rabenseifner_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; X-Mailer: Apple Mail (2.1078)
</span><br>
<span class="quotelev1">&gt; X-PMX-Version: 5.5.9.395186, Antispam-Engine: 2.7.2.376379, Antispam-Data: 2010.5.6.205714
</span><br>
<span class="quotelev1">&gt; Status: O
</span><br>
<span class="quotelev1">&gt; X-UID: 88092
</span><br>
<span class="quotelev1">&gt; Content-Length: 9229
</span><br>
<span class="quotelev1">&gt; X-Keywords:                                                                                                    
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; warum auch immer ist als forward ermail adresse keller_at_[hidden] =
</span><br>
<span class="quotelev1">&gt; konfiguriert...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Stefan.
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Dr.-Ing. Stefan Wesner
</span><br>
<span class="quotelev1">&gt; Deputy Director, Head of Applications &amp; Visualization
</span><br>
<span class="quotelev1">&gt; High Performance Computing Center of University Stuttgart
</span><br>
<span class="quotelev1">&gt; Nobelstrasse 19, D-70569 Stuttgart, Germany
</span><br>
<span class="quotelev1">&gt; Phone: +49 711-685 6 4275
</span><br>
<span class="quotelev1">&gt; Mobile: +49 172 1354054
</span><br>
<span class="quotelev1">&gt; Fax: +49 711-685 5 4275
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 06.05.2010, at 21:28, Rolf Rabenseifner wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hallo Edgar,
</span><br>
<span class="quotelev2">&gt;&gt; =20
</span><br>
<span class="quotelev2">&gt;&gt; Cool, ich habe soeben Review-Paper-20 hochgeladen.
</span><br>
<span class="quotelev2">&gt;&gt; Es funktioniert sogar ohne neues Einloggen.
</span><br>
<span class="quotelev2">&gt;&gt; Bekommst Du nun auch die Mails an eurompi2010_at_[hidden] ?
</span><br>
<span class="quotelev2">&gt;&gt; =20
</span><br>
<span class="quotelev2">&gt;&gt; Besten Dank.
</span><br>
<span class="quotelev2">&gt;&gt; Rolf
</span><br>
<span class="quotelev2">&gt;&gt; =20
</span><br>
<span class="quotelev2">&gt;&gt; ----- Original Message -----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ich glaube ich sehe das Problem:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =20
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Bei der Konfiguration gibt es den Menupunkt 'Can non-chairs add or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; modify reviews', und das war auf 'no' gesetzt. Ich habe es jetzt mal
</span><br>
<span class="quotelev3">&gt;&gt;&gt; auf 'yes' gesetzt, mich als Rolf eingeloggt, und jetzt ist der
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Menupunkt zum
</span><br>
<span class="quotelev3">&gt;&gt;&gt; uploaden der papers da.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =20
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Viele Gruesse
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Edgar
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =20
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Rolf Rabenseifner wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Danke Edgar,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; =20
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Und Ihr solltet vielleicht auch schauen, ob noch weitere Mails an
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; eurompi2010_at_[hidden] einfach unbeantwortet blieben,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; oder ob meine die einzige war.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Und warum sie bei Dir, Edgar nicht ankommen.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; =20
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Viele Gr=FC=DFe
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Rolf
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; =20
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ----- Original Message -----
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; yep, ich habe weitere Menupunkte.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; =20
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Ich habe mich aber als ein anderes Mitglied des Program Kommittees
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; eingeloggt, und der Punkt scheint in der Tat zu fehlen.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Rainer/Stefan, da Ihr den Premium service fuer Easychair bezahlt
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; habt, kann einer von
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; euch mal die Leute anpingen was da falsch ist?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; =20
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Viele Gruesse
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Edgar
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; =20
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Rolf Rabenseifner wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hallo Edgar,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; =20
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; danke bzgl. Pap23.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; =20
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Bzgl. Upload:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; =20
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Diesen Menue-Punkt gibt es bei mir nicht!!!!!!!!!
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; =20
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Im Menue &quot;Reviews&quot; gibt es als Pop-up und als Webpage folgende
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Punkte:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.easychair.org/conferences/review.cgi?a=3Dp0266d40517a">http://www.easychair.org/conferences/review.cgi?a=3Dp0266d40517a</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; =20
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  Reviews
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  Select one of the following options.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; =20
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  - Reviews on papers assigned to me
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  - Download offline review forms
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  - Subreviewers
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; =20
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Sieht die Seite bei Dir anders aus?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; =20
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Sch=F6ne Gr=FC=DFe
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Rolf
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; =20
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ----- Original Message -----
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hallo Rolf,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; =20
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Rolf Rabenseifner wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hallo Stefan, Rainer und Edgar,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; =20
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ich wei=DF nicht, ob meine Mails an eurompi2010_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; wirklich irgendwo ankommen - daher nun auch direkt an Euch.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; hm, ich habe um ehrlich zu sein keine email gesehen von Dir. Tut
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; die eurompi2010_at_[hidden] wirklich die emails an uns
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; verschicken, oder
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; wohing gehen sie? Ich sehe auch nichts in den spam filtern.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; =20
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 2 Probleme:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; =20
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; - bei
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.easychair.org/conferences/review.cgi?a=3Dp0266d40517a">http://www.easychair.org/conferences/review.cgi?a=3Dp0266d40517a</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  d.h. unter &quot;Reviews&quot; bzw. &quot;My papers&quot; finde ich keine
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  M=F6glichkeit meinen Review abzuliefern, d.h. diese
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  reviews_form.txt files.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  Falls ich nicht nur zu dumm bin, die offensichtliche Stelle
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  sofort zu sehen, dann sollte dieses Problem Eurerseits
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  m=F6glichst schnell gel=F6st werden, da es dann wahrscheinlich =
</span><br>
<span class="quotelev1">&gt; das
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  gesmte Program Committee betrifft.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Ich habe gerade probiert, wenn Du bei Revies auf den Knopf
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 'Upload reviews' gehst, kannst Du die Form hochladen. Das scheint
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; zu tun.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; =20
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; - Das Paper 23 ist immernoch nicht in meiner &quot;Reviews--&gt;my
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; papers&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  Liste wieder sichtbar, siehe angeh=E4ngte Mail, zu der ich nie
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  eine Antwort bekam.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  (H=E4tte sie vielleicht in Deutsch schreiben sollen,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  aber ich wei=DF nicht, wer alles auf eurompi2010_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  eingetragen ist.)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; done, paper 23 ist zusaetzlich fuer Dich eingetragen.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Normalerweise protestieren wir nicht wenn jemand freiwillig mehr
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Arbeit leisten
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; moechte.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; =20
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Viele Gruesse
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Edgar
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; =20
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; =20
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Sch=F6ne Gr=FC=DFe
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Rolf
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; =20
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; =20
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ----- Original Message -----
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; =20
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I did not receive any answer within the last 3 days.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I expect that you are in a state where you are not
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; able to make further changes without problems.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Therefore, I'll review the currently assigned papers 20 and 22.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Please assign also the paper 23 to me because I've
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; already done parts of the review.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; =20
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I need the decision because I'm flying many hours
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; next week, which is always a good time for reviewing.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; =20
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Best regards and happy weekend
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Rolf
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; =20
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ----- Original Message (Apr. 27) -----
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi Stefan, Rainer, Edgar,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; =20
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I started already yesterday to review paper 23.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Yesterday, I was assigned to papers 22, 23, and 24.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; =20
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Papers in my main area of expertise are:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; - 23 (area of my PhD and work in last 3 years),
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; - 2, 10 (related to my work of optimization of
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; collective reduction operations).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; =20
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; An additional conflict is paper 21, because Rainer is
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; a direct colleague at HLRS. I entered this conflict into
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; EasyChair database and therefore, the paper was removed
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; from my review list.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; =20
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; It would be nice,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; - if I can get back paper 23 for review.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; - if you can substitute papers 20+22 by 2+10.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; =20
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Best regards
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Rolf
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; =20
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; =20
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ----- Original Message -----
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Dear Rolf,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the papers of the EuroMPI2010 conference have been assigned
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; to the PC members. Please make sure, that the automatic
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; conflict detection worked fine.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; =20
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; We kindly ask you to please log into EasyChair
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (<a href="http://www.easychair.org">http://www.easychair.org</a>) to check &amp; download Your assigned
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; papers and notify us of further conflicts by
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 30th of April.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; =20
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; =20
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; We would like to encourage a discussion on on papers where
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the reviews show different opinions.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Therefore we would like to ask You to please submit Your
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; review by 12th of May
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; to be able to make the deadline for the notification of
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; authors on 20th of May.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; If you cannot proceed with the review or this is not
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; convenient for you please do not hesitate to contact us and
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; we will submit
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the papers to another reviewer.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; =20
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; The review process will be open but anonymous -- You should
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; be able to see other reviewers input, after you have
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; submitted your review. If you have any questions, please do
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; not hesitate
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; to contact us.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; =20
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thank you very much.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; =20
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Best regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the Program Chairs of EuroMPI 2010.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -- Dr. Rolf Rabenseifner . . . . . . . . . .. email
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; rabenseifner_at_[hidden] High Performance Computing Center (HLRS)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; . phone ++49(0)711/685-65530 University of Stuttgart . . . . .
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; . .
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; . .. fax
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ++49(0)711 / 685-65832
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Head of Dpmt Parallel Computing . . .
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; www.hlrs.de/people/rabenseifner Nobelstr. 19, D-70550
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Stuttgart, Germany . (Office: Allmandring 30)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -- Dr. Rolf Rabenseifner . . . . . . . . . .. email
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; rabenseifner_at_[hidden] High Performance Computing Center (HLRS) .
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; phone ++49(0)711/685-65530 University of Stuttgart . . . . . .
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; . . .. fax
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ++49(0)711 / 685-65832
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Head of Dpmt Parallel Computing . . .
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; www.hlrs.de/people/rabenseifner Nobelstr. 19, D-70550
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Stuttgart, Germany . (Office: Allmandring 30)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; -- Edgar Gabriel
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Assistant Professor
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Parallel Software Technologies Lab <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Department of Computer Science University of Houston
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Philip G. Hoffman Hall, Room 524 Houston, TX-77204, USA
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Tel: +1 (713) 743-3857 Fax: +1 (713) 743-3335
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -- Edgar Gabriel
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Assistant Professor
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Parallel Software Technologies Lab <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Department of Computer Science University of Houston
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Philip G. Hoffman Hall, Room 524 Houston, TX-77204, USA
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Tel: +1 (713) 743-3857 Fax: +1 (713) 743-3335
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; =20
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =20
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- Edgar Gabriel
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Assistant Professor
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Parallel Software Technologies Lab <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Department of Computer Science University of Houston
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Philip G. Hoffman Hall, Room 524 Houston, TX-77204, USA
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tel: +1 (713) 743-3857 Fax: +1 (713) 743-3335
</span><br>
<span class="quotelev2">&gt;&gt; =20
</span><br>
<span class="quotelev2">&gt;&gt; --=20
</span><br>
<span class="quotelev2">&gt;&gt; Dr. Rolf Rabenseifner . . . . . . . . . .. email rabenseifner_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; High Performance Computing Center (HLRS) . phone ++49(0)711/685-65530
</span><br>
<span class="quotelev2">&gt;&gt; University of Stuttgart . . . . . . . . .. fax ++49(0)711 / 685-65832
</span><br>
<span class="quotelev2">&gt;&gt; Head of Dpmt Parallel Computing . . . www.hlrs.de/people/rabenseifner
</span><br>
<span class="quotelev2">&gt;&gt; Nobelstr. 19, D-70550 Stuttgart, Germany . (Office: Allmandring 30)
</span><br>
<span class="quotelev1">&gt; Return-Path: &lt;users-bounces_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; X-Original-To: gabriel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Delivered-To: gabriel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Received: from localhost (dijkstra.cs.uh.edu [127.0.0.1])
</span><br>
<span class="quotelev1">&gt; 	by dijkstra.cs.uh.edu (Postfix) with ESMTP id 1792423CB6D
</span><br>
<span class="quotelev1">&gt; 	for &lt;gabriel_at_[hidden]&gt;; Thu,  6 May 2010 16:29:05 -0500 (CDT)
</span><br>
<span class="quotelev1">&gt; X-Virus-Scanned: amavisd-new at cs.uh.edu
</span><br>
<span class="quotelev1">&gt; Received: from dijkstra.cs.uh.edu ([127.0.0.1])
</span><br>
<span class="quotelev1">&gt; 	by localhost (dijkstra.cs.uh.edu [127.0.0.1]) (amavisd-new, port 10024)
</span><br>
<span class="quotelev1">&gt; 	with ESMTP id r4MtRA9MloZy for &lt;gabriel_at_[hidden]&gt;;
</span><br>
<span class="quotelev1">&gt; 	Thu,  6 May 2010 16:29:03 -0500 (CDT)
</span><br>
<span class="quotelev1">&gt; Received: from milliways.osl.iu.edu (milliways.osl.iu.edu [129.79.245.239])
</span><br>
<span class="quotelev1">&gt; 	by dijkstra.cs.uh.edu (Postfix) with ESMTP id E924823CB5A
</span><br>
<span class="quotelev1">&gt; 	for &lt;gabriel_at_[hidden]&gt;; Thu,  6 May 2010 16:29:02 -0500 (CDT)
</span><br>
<span class="quotelev1">&gt; Received: from milliways.osl.iu.edu (localhost [127.0.0.1])
</span><br>
<span class="quotelev1">&gt; 	by milliways.osl.iu.edu (8.13.1/8.13.1/IUCS_2.92) with ESMTP id o46LSlDr022281;
</span><br>
<span class="quotelev1">&gt; 	Thu, 6 May 2010 17:28:49 -0400
</span><br>
<span class="quotelev1">&gt; Received: from mail1.ldeo.columbia.edu (mail1.ldeo.columbia.edu
</span><br>
<span class="quotelev1">&gt; 	[129.236.19.100])
</span><br>
<span class="quotelev1">&gt; 	by milliways.osl.iu.edu (8.13.1/8.13.1/IUCS_2.92) with ESMTP id
</span><br>
<span class="quotelev1">&gt; 	o46LSgTQ022276
</span><br>
<span class="quotelev1">&gt; 	for &lt;users_at_[hidden]&gt;; Thu, 6 May 2010 17:28:46 -0400
</span><br>
<span class="quotelev1">&gt; Received: from claudius.ldeo.columbia.edu (claudius.ldgo.columbia.edu
</span><br>
<span class="quotelev1">&gt; 	[129.236.21.127]) (user=gus mech=PLAIN bits=0)
</span><br>
<span class="quotelev1">&gt; 	by mail1.ldeo.columbia.edu (8.14.3/8.14.3/MAIL-LDEO-1.9) with ESMTP id
</span><br>
<span class="quotelev1">&gt; 	o46LSg0a001054
</span><br>
<span class="quotelev1">&gt; 	(version=TLSv1/SSLv3 cipher=DHE-RSA-AES256-SHA bits=256 verify=NOT)
</span><br>
<span class="quotelev1">&gt; 	for &lt;users_at_[hidden]&gt;; Thu, 6 May 2010 17:28:42 -0400 (EDT)
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;4BE33485.9090202_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: Thu, 06 May 2010 17:28:37 -0400
</span><br>
<span class="quotelev1">&gt; From: Gus Correa &lt;gus_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; User-Agent: Thunderbird 2.0.0.23 (X11/20090825)
</span><br>
<span class="quotelev1">&gt; MIME-Version: 1.0
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; References: &lt;4BE08F2A.6000101_at_[hidden]&gt;	&lt;441ACF3B-34A9-4FF5-B78E-B9A8DF4E87F3_at_[hidden]&gt;	&lt;4BE09531.9040300_at_[hidden]&gt;	&lt;0D4ABFDD-9802-4D77-BF70-C7EC3198F32A_at_[hidden]&gt;	&lt;4BE0A505.2000005_at_[hidden]&gt;	&lt;4BE0CB62.7080300_at_[hidden]&gt;	&lt;10B2585F-576A-4B18-A83E-E8E16582329C_at_[hidden]&gt;	&lt;4BE1AB3A.4010504_at_[hidden]&gt;	&lt;9A3FCC9C-56DE-4DE4-A781-460CCC083CE9_at_[hidden]&gt;	&lt;4BE1EC79.3030608_at_[hidden]&gt;	&lt;20100505235456.GA5622_at_sopalepc&gt;	&lt;7DC1D35D-11C6-4F4B-870A-031FF11F7B30_at_[hidden]&gt;	&lt;4BE2D427.4090708_at_[hidden]&gt;	&lt;4BE2F269.1090508_at_[hidden]&gt;	&lt;4BE2F857.9090007_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; 	&lt;4BE303FF.4020708_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; 	&lt;A70200B0-1EBA-4212-A0D6-22CB3405339E_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; In-Reply-To: &lt;A70200B0-1EBA-4212-A0D6-22CB3405339E_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; X-Scanned-By: MIMEDefang 2.64 on 129.236.19.105
</span><br>
<span class="quotelev1">&gt; X-PMX-Version: 5.5.9.388399, Antispam-Engine: 2.7.2.376379,
</span><br>
<span class="quotelev1">&gt; 	Antispam-Data: 2010.5.6.211515
</span><br>
<span class="quotelev1">&gt; X-PerlMx-Spam: Gauge=X, Probability=10%, Report='
</span><br>
<span class="quotelev1">&gt; 	TO_IN_SUBJECT 0.5, BODY_SIZE_6000_6999 0, BODY_SIZE_7000_LESS 0,
</span><br>
<span class="quotelev1">&gt; 	__BOUNCE_CHALLENGE_SUBJ 0, __BOUNCE_NDR_SUBJ_EXEMPT 0,
</span><br>
<span class="quotelev1">&gt; 	__CP_URI_IN_BODY 0, __CT 0, __CTE 0, __CT_TEXT_PLAIN 0,
</span><br>
<span class="quotelev1">&gt; 	__HAS_MSGID 0, __MIME_TEXT_ONLY 0, __MIME_VERSION 0,
</span><br>
<span class="quotelev1">&gt; 	__MOZILLA_MSGID 0, __SANE_MSGID 0, __TO_MALFORMED_2 0, __URI_NS ,
</span><br>
<span class="quotelev1">&gt; 	__USER_AGENT 0'
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] How do I run OpenMPI safely on
</span><br>
<span class="quotelev1">&gt;  a	Nehalem	standalone machine?
</span><br>
<span class="quotelev1">&gt; X-BeenThere: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; X-Mailman-Version: 2.1.11rc1
</span><br>
<span class="quotelev1">&gt; Precedence: list
</span><br>
<span class="quotelev1">&gt; Reply-To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; List-Id: Open MPI Users &lt;users.open-mpi.org&gt;
</span><br>
<span class="quotelev1">&gt; List-Unsubscribe: &lt;<a href="http://www.open-mpi.org/mailman/options.cgi/users">http://www.open-mpi.org/mailman/options.cgi/users</a>&gt;,
</span><br>
<span class="quotelev1">&gt; 	&lt;mailto:users-request_at_[hidden]?subject=unsubscribe&gt;
</span><br>
<span class="quotelev1">&gt; List-Archive: &lt;<a href="http://www.open-mpi.org/MailArchives/users">http://www.open-mpi.org/MailArchives/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; List-Post: &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; List-Help: &lt;mailto:users-request_at_[hidden]?subject=help&gt;
</span><br>
<span class="quotelev1">&gt; List-Subscribe: &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;,
</span><br>
<span class="quotelev1">&gt; 	&lt;mailto:users-request_at_[hidden]?subject=subscribe&gt;
</span><br>
<span class="quotelev1">&gt; Content-Transfer-Encoding: 7bit
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;us-ascii&quot;; Format=&quot;flowed&quot;
</span><br>
<span class="quotelev1">&gt; Sender: users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Errors-To: users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Status: O
</span><br>
<span class="quotelev1">&gt; X-UID: 88093
</span><br>
<span class="quotelev1">&gt; Content-Length: 6268
</span><br>
<span class="quotelev1">&gt; X-Keywords:                                                                                                    
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Samuel
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Samuel K. Gutierrez wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Gus,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This may not help, but it's worth a try.  If it's not too much trouble, 
</span><br>
<span class="quotelev2">&gt;&gt; can you please reconfigure your Open MPI installation with 
</span><br>
<span class="quotelev2">&gt;&gt; --enable-debug and then rebuild?  After that, may we see the stack trace 
</span><br>
<span class="quotelev2">&gt;&gt; from a core file that is produced after the segmentation fault?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Samuel K. Gutierrez
</span><br>
<span class="quotelev2">&gt;&gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you for the suggestion.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am a bit reluctant to try this because when it fails,
</span><br>
<span class="quotelev1">&gt; it *really* fails.
</span><br>
<span class="quotelev1">&gt; Most of the times the machine doesn't even return the prompt,
</span><br>
<span class="quotelev1">&gt; and in all cases it freezes and requires a hard reboot.
</span><br>
<span class="quotelev1">&gt; It is not a segfault that the OS can catch, I guess.
</span><br>
<span class="quotelev1">&gt; I wonder if enabling debug mode would do much for us,
</span><br>
<span class="quotelev1">&gt; and get to the point of dumping a core, or just die before that.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Gustavo Correa
</span><br>
<span class="quotelev1">&gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev1">&gt; Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On May 6, 2010, at 12:01 PM, Gus Correa wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Eugene
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for the detailed answer.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *************
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1) Now I can see and use the btl_sm_num_fifos component:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I had committed already &quot;btl = ^sm&quot; to the openmpi-mca-params.conf
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file.  This apparently hides the btl_sm_num_fifos from ompi_info.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; After I switched to no options in openmpi-mca-params.conf,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; then ompi_info showed the btl_sm_num_fifos component.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_info --all | grep btl_sm_num_fifos
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 MCA btl: parameter &quot;btl_sm_num_fifos&quot; (current value: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;1&quot;, data source: default value)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A side comment:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This means that the system administrator can
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hide some Open MPI options from the users, depending on what
</span><br>
<span class="quotelev3">&gt;&gt;&gt; he puts in the openmpi-mca-params.conf file, right?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *************
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2) However, running with &quot;sm&quot; still breaks, unfortunately:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Boomer!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I get the same errors that I reported in my very
</span><br>
<span class="quotelev3">&gt;&gt;&gt; first email, if I increase the number of processes to 16,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to explore the hyperthreading range.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is using &quot;sm&quot; (i.e. not excluded in the mca config file),
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and btl_sm_num_fifos (mpiexec command line)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The machine hangs, requires a hard reboot, etc, etc,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; as reported earlier.  See the below, please.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So, I guess the conclusion is that I can use sm,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but I have to remain within the range of physical cores (8),
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not oversubscribe, not try to explore the HT range.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Should I expect it to work also for np&gt;number of physical cores?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I wonder if this would still work with np&lt;=8, but with heavier code.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (I only used hello_c.c so far.)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Not sure I'll be able to test this, the user wants to use the machine.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $mpiexec -mca btl_sm_num_fifos 4 -np 4 a.out
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello, world, I am 0 of 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello, world, I am 1 of 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello, world, I am 2 of 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello, world, I am 3 of 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ mpiexec -mca btl_sm_num_fifos 8 -np 8 a.out
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello, world, I am 0 of 8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello, world, I am 1 of 8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello, world, I am 2 of 8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello, world, I am 3 of 8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello, world, I am 4 of 8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello, world, I am 5 of 8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello, world, I am 6 of 8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello, world, I am 7 of 8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ mpiexec -mca btl_sm_num_fifos 16 -np 16 a.out
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpiexec noticed that process rank 8 with PID 3659 on node 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; spinoza.ldeo.columbia.edu exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Message from syslogd_at_spinoza at May  6 13:38:13 ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; kernel:------------[ cut here ]------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Message from syslogd_at_spinoza at May  6 13:38:13 ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; kernel:invalid opcode: 0000 [#1] SMP
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Message from syslogd_at_spinoza at May  6 13:38:13 ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; kernel:last sysfs file: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /sys/devices/system/cpu/cpu15/topology/physical_package_id
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Message from syslogd_at_spinoza at May  6 13:38:13 ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; kernel:Stack:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Message from syslogd_at_spinoza at May  6 13:38:13 ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; kernel:Call Trace:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Message from syslogd_at_spinoza at May  6 13:38:13 ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; kernel:Code: 48 89 45 a0 4c 89 ff e8 e0 dd 2b 00 41 8b b6 58 03 00 00 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4c 89 e7 ff c6 e8 b5 bc ff ff 41 8b 96 5c 03 00 00 48 98 48 39 d0 73 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 04 &lt;0f&gt; 0b eb fe 48 29 d0 48 89 45 a8 66 41 ff 07 49 8b 94 24 00 01
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *****************
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Many thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gus Correa
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gustavo Correa
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Eugene Loh wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Gus Correa wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi Eugene
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thank you for answering one of my original questions.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; However, there seems to be a problem with the syntax.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Is it really &quot;-mca btl btl_sm_num_fifos=some_number&quot;?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; No.  Try &quot;--mca btl_sm_num_fifos 4&quot;.  Or,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; % setenv OMPI_MCA_btl_sm_num_fifos 4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; % ompi_info -a | grep btl_sm_num_fifos     # check that things were 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; set correctly
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; % mpirun -n 4 a.out
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; When I grep any component starting with btl_sm I get nothing:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ompi_info --all | grep btl_sm
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (No output)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm no guru, but I think the reason has something to do with 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; dynamically loaded somethings.  E.g.,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; % /home/eugene/ompi/bin/ompi_info --all | grep btl_sm_num_fifos
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (no output)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; % setenv OPAL_PREFIX /home/eugene/ompi
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; % set path = ( $OPAL_PREFIX/bin $path )
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; % ompi_info --all | grep btl_sm_num_fifos
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                MCA btl: parameter &quot;btl_sm_num_fifos&quot; (current value: 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;1&quot;, data source: default value)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Return-Path: &lt;users-bounces_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; X-Original-To: gabriel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Delivered-To: gabriel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Received: from localhost (dijkstra.cs.uh.edu [127.0.0.1])
</span><br>
<span class="quotelev1">&gt; 	by dijkstra.cs.uh.edu (Postfix) with ESMTP id DCA5923CB75
</span><br>
<span class="quotelev1">&gt; 	for &lt;gabriel_at_[hidden]&gt;; Thu,  6 May 2010 16:34:49 -0500 (CDT)
</span><br>
<span class="quotelev1">&gt; X-Virus-Scanned: amavisd-new at cs.uh.edu
</span><br>
<span class="quotelev1">&gt; Received: from dijkstra.cs.uh.edu ([127.0.0.1])
</span><br>
<span class="quotelev1">&gt; 	by localhost (dijkstra.cs.uh.edu [127.0.0.1]) (amavisd-new, port 10024)
</span><br>
<span class="quotelev1">&gt; 	with ESMTP id 9aIlmplg06In for &lt;gabriel_at_[hidden]&gt;;
</span><br>
<span class="quotelev1">&gt; 	Thu,  6 May 2010 16:34:47 -0500 (CDT)
</span><br>
<span class="quotelev1">&gt; Received: from milliways.osl.iu.edu (milliways.osl.iu.edu [129.79.245.239])
</span><br>
<span class="quotelev1">&gt; 	by dijkstra.cs.uh.edu (Postfix) with ESMTP id 674E823CB74
</span><br>
<span class="quotelev1">&gt; 	for &lt;gabriel_at_[hidden]&gt;; Thu,  6 May 2010 16:34:47 -0500 (CDT)
</span><br>
<span class="quotelev1">&gt; Received: from milliways.osl.iu.edu (localhost [127.0.0.1])
</span><br>
<span class="quotelev1">&gt; 	by milliways.osl.iu.edu (8.13.1/8.13.1/IUCS_2.92) with ESMTP id o46LYYhG022846;
</span><br>
<span class="quotelev1">&gt; 	Thu, 6 May 2010 17:34:34 -0400
</span><br>
<span class="quotelev1">&gt; Received: from rtp-iport-2.cisco.com (rtp-iport-2.cisco.com [64.102.122.149])
</span><br>
<span class="quotelev1">&gt; 	by milliways.osl.iu.edu (8.13.1/8.13.1/IUCS_2.92) with ESMTP id
</span><br>
<span class="quotelev1">&gt; 	o46LYSQt022842
</span><br>
<span class="quotelev1">&gt; 	for &lt;users_at_[hidden]&gt;; Thu, 6 May 2010 17:34:32 -0400
</span><br>
<span class="quotelev1">&gt; Authentication-Results: rtp-iport-2.cisco.com;
</span><br>
<span class="quotelev1">&gt; 	dkim=neutral (message not signed) header.i=none
</span><br>
<span class="quotelev1">&gt; X-IronPort-Anti-Spam-Filtered: true
</span><br>
<span class="quotelev1">&gt; X-IronPort-Anti-Spam-Result: AvsEAKbS4ktAZnwM/2dsb2JhbACeAnGja5lbhRME
</span><br>
<span class="quotelev1">&gt; X-IronPort-AV: E=Sophos;i=&quot;4.52,343,1270425600&quot;; d=&quot;scan'208&quot;;a=&quot;108847076&quot;
</span><br>
<span class="quotelev1">&gt; Received: from rtp-core-1.cisco.com ([64.102.124.12])
</span><br>
<span class="quotelev1">&gt; 	by rtp-iport-2.cisco.com with ESMTP; 06 May 2010 21:34:28 +0000
</span><br>
<span class="quotelev1">&gt; Received: from rtp-jsquyres-8714.cisco.com (rtp-jsquyres-8714.cisco.com
</span><br>
<span class="quotelev1">&gt; 	[10.116.19.197])
</span><br>
<span class="quotelev1">&gt; 	by rtp-core-1.cisco.com (8.13.8/8.14.3) with ESMTP id o46LYQO2004203
</span><br>
<span class="quotelev1">&gt; 	for &lt;users_at_[hidden]&gt;; Thu, 6 May 2010 21:34:28 GMT
</span><br>
<span class="quotelev1">&gt; Mime-Version: 1.0 (Apple Message framework v1078)
</span><br>
<span class="quotelev1">&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; In-Reply-To: &lt;4BE303FF.4020708_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: Thu, 6 May 2010 17:34:26 -0400
</span><br>
<span class="quotelev1">&gt; Message-Id: &lt;2B9FC527-EACD-47DA-BC26-45332247EFCC_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; References: &lt;4BE08F2A.6000101_at_[hidden]&gt;	&lt;441ACF3B-34A9-4FF5-B78E-B9A8DF4E87F3_at_[hidden]&gt;	&lt;4BE09531.9040300_at_[hidden]&gt;	&lt;0D4ABFDD-9802-4D77-BF70-C7EC3198F32A_at_[hidden]&gt;	&lt;4BE0A505.2000005_at_[hidden]&gt;	&lt;4BE0CB62.7080300_at_[hidden]&gt;	&lt;10B2585F-576A-4B18-A83E-E8E16582329C_at_[hidden]&gt;	&lt;4BE1AB3A.4010504_at_[hidden]&gt;	&lt;9A3FCC9C-56DE-4DE4-A781-460CCC083CE9_at_[hidden]&gt;	&lt;4BE1EC79.3030608_at_[hidden]&gt;	&lt;20100505235456.GA5622_at_sopalepc&gt;	&lt;7DC1D35D-11C6-4F4B-870A-031FF11F7B30_at_[hidden]&gt;	&lt;4BE2D427.4090708_at_[hidden]&gt;	&lt;4BE2F269.1090508_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; 	&lt;4BE2F857.9090007_at_[hidden]&gt; &lt;4BE303FF.4020708_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; X-Mailer: Apple Mail (2.1078)
</span><br>
<span class="quotelev1">&gt; X-PMX-Version: 5.5.9.388399, Antispam-Engine: 2.7.2.376379,
</span><br>
<span class="quotelev1">&gt; 	Antispam-Data: 2010.5.6.211515
</span><br>
<span class="quotelev1">&gt; X-PerlMx-Spam: Gauge=IIIIIIII, Probability=8%, Report='
</span><br>
<span class="quotelev1">&gt; 	SUPERLONG_LINE 0.05, BODY_SIZE_4000_4999 0, BODY_SIZE_5000_LESS 0,
</span><br>
<span class="quotelev1">&gt; 	BODY_SIZE_7000_LESS 0, __BOUNCE_CHALLENGE_SUBJ 0,
</span><br>
<span class="quotelev1">&gt; 	__BOUNCE_NDR_SUBJ_EXEMPT 0, __CP_URI_IN_BODY 0, __CT 0, __CTE 0,
</span><br>
<span class="quotelev1">&gt; 	__CT_TEXT_PLAIN 0, __HAS_MSGID 0, __HAS_X_MAILER 0,
</span><br>
<span class="quotelev1">&gt; 	__MIME_TEXT_ONLY 0, __MIME_VERSION 0, __MIME_VERSION_APPLEMAIL 0,
</span><br>
<span class="quotelev1">&gt; 	__MSGID_APPLEMAIL 0, __SANE_MSGID 0, __TO_MALFORMED_2 0,
</span><br>
<span class="quotelev1">&gt; 	__URI_NS , __USER_AGENT_APPLEMAIL 0, __X_MAILER_APPLEMAIL 0'
</span><br>
<span class="quotelev1">&gt; X-MIME-Autoconverted: from quoted-printable to 8bit by milliways.osl.iu.edu id
</span><br>
<span class="quotelev1">&gt; 	o46LYSQt022842
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] How do I run OpenMPI safely on a
</span><br>
<span class="quotelev1">&gt; 	Nehalem	standalone machine?
</span><br>
<span class="quotelev1">&gt; X-BeenThere: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; X-Mailman-Version: 2.1.11rc1
</span><br>
<span class="quotelev1">&gt; Precedence: list
</span><br>
<span class="quotelev1">&gt; Reply-To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; List-Id: Open MPI Users &lt;users.open-mpi.org&gt;
</span><br>
<span class="quotelev1">&gt; List-Unsubscribe: &lt;<a href="http://www.open-mpi.org/mailman/options.cgi/users">http://www.open-mpi.org/mailman/options.cgi/users</a>&gt;,
</span><br>
<span class="quotelev1">&gt; 	&lt;mailto:users-request_at_[hidden]?subject=unsubscribe&gt;
</span><br>
<span class="quotelev1">&gt; List-Archive: &lt;<a href="http://www.open-mpi.org/MailArchives/users">http://www.open-mpi.org/MailArchives/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; List-Post: &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; List-Help: &lt;mailto:users-request_at_[hidden]?subject=help&gt;
</span><br>
<span class="quotelev1">&gt; List-Subscribe: &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;,
</span><br>
<span class="quotelev1">&gt; 	&lt;mailto:users-request_at_[hidden]?subject=subscribe&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;us-ascii&quot;
</span><br>
<span class="quotelev1">&gt; Content-Transfer-Encoding: 7bit
</span><br>
<span class="quotelev1">&gt; Sender: users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Errors-To: users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Status: O
</span><br>
<span class="quotelev1">&gt; X-UID: 88094
</span><br>
<span class="quotelev1">&gt; Content-Length: 4035
</span><br>
<span class="quotelev1">&gt; X-Keywords:                                                                                                    
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 6, 2010, at 2:01 PM, Gus Correa wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1) Now I can see and use the btl_sm_num_fifos component:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I had committed already &quot;btl = ^sm&quot; to the openmpi-mca-params.conf
</span><br>
<span class="quotelev2">&gt;&gt; file.  This apparently hides the btl_sm_num_fifos from ompi_info.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; After I switched to no options in openmpi-mca-params.conf,
</span><br>
<span class="quotelev2">&gt;&gt; then ompi_info showed the btl_sm_num_fifos component.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ompi_info --all | grep btl_sm_num_fifos
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_sm_num_fifos&quot; (current value: &quot;1&quot;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; A side comment:
</span><br>
<span class="quotelev2">&gt;&gt; This means that the system administrator can
</span><br>
<span class="quotelev2">&gt;&gt; hide some Open MPI options from the users, depending on what
</span><br>
<span class="quotelev2">&gt;&gt; he puts in the openmpi-mca-params.conf file, right?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Correct.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; BUT: a user can always override the &quot;btl&quot; MCA param and see them again.  For example, you could also have done this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    echo &quot;btl =&quot; &gt; ~/.openmpi/mca-params.conf
</span><br>
<span class="quotelev1">&gt;    ompi_info --all | grep btl_sm_num_fifos
</span><br>
<span class="quotelev1">&gt;    # ...will show the sm params...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2) However, running with &quot;sm&quot; still breaks, unfortunately:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Boomer!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Doh!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I get the same errors that I reported in my very
</span><br>
<span class="quotelev2">&gt;&gt; first email, if I increase the number of processes to 16,
</span><br>
<span class="quotelev2">&gt;&gt; to explore the hyperthreading range.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is using &quot;sm&quot; (i.e. not excluded in the mca config file),
</span><br>
<span class="quotelev2">&gt;&gt; and btl_sm_num_fifos (mpiexec command line)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The machine hangs, requires a hard reboot, etc, etc,
</span><br>
<span class="quotelev2">&gt;&gt; as reported earlier.  See the below, please.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I saw that only some probably-unrelated dmesg messages were emitted.  Was there anything else revealing on the console and/or /var/log/* files?  Hard reboots absolutely should not be caused by Open MPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So, I guess the conclusion is that I can use sm,
</span><br>
<span class="quotelev2">&gt;&gt; but I have to remain within the range of physical cores (8),
</span><br>
<span class="quotelev2">&gt;&gt; not oversubscribe, not try to explore the HT range.
</span><br>
<span class="quotelev2">&gt;&gt; Should I expect it to work also for np&gt;number of physical cores?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Your prior explanations of when HT is useful seemed pretty reasonable to me.  Meaning: Nehalem HT will help only in some kinds of codes.  Dense computation codes with few conditional branches may not benefit much from HT.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But OMPI applications should always run *correctly*, regardless of HT or not-HT -- even if you're oversubscribing.  The performance may suffer (sometimes dramatically) if you oversubscribe physical cores with dense computational code, but it should always run *correctly*.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I wonder if this would still work with np&lt;=8, but with heavier code.
</span><br>
<span class="quotelev2">&gt;&gt; (I only used hello_c.c so far.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If hello_c is crashing your computer - even if you're running np&gt;8 or np&gt;16 -- something is wrong outside of Open MPI.  I routinely run np=100 hello_c on machines.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; $ mpiexec -mca btl_sm_num_fifos 16 -np 16 a.out
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpiexec noticed that process rank 8 with PID 3659 on node spinoza.ldeo.columbia.edu exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; $
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message from syslogd_at_spinoza at May  6 13:38:13 ...
</span><br>
<span class="quotelev2">&gt;&gt; kernel:------------[ cut here ]------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message from syslogd_at_spinoza at May  6 13:38:13 ...
</span><br>
<span class="quotelev2">&gt;&gt; kernel:invalid opcode: 0000 [#1] SMP
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message from syslogd_at_spinoza at May  6 13:38:13 ...
</span><br>
<span class="quotelev2">&gt;&gt; kernel:last sysfs file: /sys/devices/system/cpu/cpu15/topology/physical_package_id
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message from syslogd_at_spinoza at May  6 13:38:13 ...
</span><br>
<span class="quotelev2">&gt;&gt; kernel:Stack:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message from syslogd_at_spinoza at May  6 13:38:13 ...
</span><br>
<span class="quotelev2">&gt;&gt; kernel:Call Trace:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message from syslogd_at_spinoza at May  6 13:38:13 ...
</span><br>
<span class="quotelev2">&gt;&gt; kernel:Code: 48 89 45 a0 4c 89 ff e8 e0 dd 2b 00 41 8b b6 58 03 00 00 4c 89 e7 ff c6 e8 b5 bc ff ff 41 8b 96 5c 03 00 00 48 98 48 39 d0 73 04 &lt;0f&gt; 0b eb fe 48 29 d0 48 89 45 a8 66 41 ff 07 49 8b 94 24 00 01
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I unfortunately don't know what these messages mean...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
-- 
Edgar Gabriel
Assistant Professor
Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
Department of Computer Science          University of Houston
Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335

</pre>
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-7899/signature.asc">OpenPGP digital signature</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7900.php">Kawashima: "Re: [OMPI devel] Thread safety levels"</a>
<li><strong>Previous message:</strong> <a href="7898.php">George Bosilca: "Re: [OMPI devel] malloc(0) warnings"</a>
<li><strong>In reply to:</strong> <a href="7898.php">George Bosilca: "Re: [OMPI devel] malloc(0) warnings"</a>
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
