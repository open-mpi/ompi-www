<?
$subject_val = "Re: [OMPI devel] RFC: Well-known mca parameters";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 25 10:29:17 2014" -->
<!-- isoreceived="20140425142917" -->
<!-- sent="Fri, 25 Apr 2014 07:29:12 -0700" -->
<!-- isosent="20140425142912" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Well-known mca parameters" -->
<!-- id="C578270A-EB0E-4520-A1EC-BC069AC14368_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="535A449B.2060506_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Well-known mca parameters<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-25 10:29:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14618.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<li><strong>Previous message:</strong> <a href="14616.php">Ralph Castain: "Re: [OMPI devel] RFC: Well-known mca parameters"</a>
<li><strong>In reply to:</strong> <a href="14613.php">Stephen Poole: "Re: [OMPI devel] RFC: Well-known mca parameters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14619.php">Mike Dubman: "Re: [OMPI devel] RFC: Well-known mca parameters"</a>
<li><strong>Reply:</strong> <a href="14619.php">Mike Dubman: "Re: [OMPI devel] RFC: Well-known mca parameters"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
So long as this isn't a requirement, I don't see an issue with standardizing the syntax. I suspect Jeff's concern is with hard-coding ompi_info (and all its flavors) with an option that looks for a specific MCA param from every component. Seems somewhat icky from a software design standpoint, and inflexible.
<br>
<p>Perhaps creating a special MCA param &quot;class&quot; might make that more palatable? So we aren't looking for a particular string inside an MCA param name when someone gives that ompi_info option, but instead printing all params of a specific type?
<br>
<p><p>On Apr 25, 2014, at 4:18 AM, Stephen Poole &lt;swpoole_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----BEGIN PGP SIGNED MESSAGE-----
</span><br>
<span class="quotelev1">&gt; Hash: SHA1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Although the one Mike suggests would be much easier for &quot;end users&quot;, I
</span><br>
<span class="quotelev1">&gt; think that in this
</span><br>
<span class="quotelev1">&gt; case, if the end user is more of a Linux newbie, they would have scripts
</span><br>
<span class="quotelev1">&gt; written for them,
</span><br>
<span class="quotelev1">&gt; that the admins use or will be handed to them. Either way would be a
</span><br>
<span class="quotelev1">&gt; great addition for
</span><br>
<span class="quotelev1">&gt; system/build/runtime verification of the installed libraries.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best
</span><br>
<span class="quotelev1">&gt; Steve...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 4/25/14, 7:13 AM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 25, 2014, at 7:01 AM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ompi_info --all --parsable | egrep ':(compile|run)time_version'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; yep, this is much better, but I don`t think we should count on
</span><br>
<span class="quotelev1">&gt; end-user to be unix regex guru.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I thought you said this was for support scripts?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Users can easily do this:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  ompi_info --all --parsable | grep time_version
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Or even
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  ompi_info --all --parsable | grep _version
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Or even
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  ompi_info --all --parsable | grep version
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ideally, following would be much user-friendlier:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_info --all --parsable --print-sys-libs-versions
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Fri, Apr 25, 2014 at 1:32 PM, Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev1">&gt; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Apr 24, 2014, at 1:38 AM, Mike Dubman &lt;miked_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ** prefix each well-known MCA param with &quot;print_&quot;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I like the overall idea of this RFC, but I'm not wild about this
</span><br>
<span class="quotelev1">&gt; specific word &quot;print&quot; -- it seems weird.  All the MCA parameters are
</span><br>
<span class="quotelev1">&gt; *printed* -- the word &quot;print&quot; doesn't really distinguish anything here.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (I know I'm just harping on a word, but I think it's an important
</span><br>
<span class="quotelev1">&gt; word here... :-) )
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Got a better suggestion, perchance?  (I don't, offhand...)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ** Define two well-known mca parameters indicating external library
</span><br>
<span class="quotelev1">&gt; runtime and compiletime versions, i.e.:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; print_compiletime_version
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; print_runtime_version
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The following command will show all exposed well-known mca params
</span><br>
<span class="quotelev1">&gt; from all components:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ompi_info --parsable -l 9 |grep &quot;:print_&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; How about changing this a bit (hoping my regexp syntax is correct at
</span><br>
<span class="quotelev1">&gt; 6:30am before coffee...):
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_info --all --parsable | egrep ':(compile|run)time_version'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Then the &quot;print_&quot; prefix isn't needed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14610.php">http://www.open-mpi.org/community/lists/devel/2014/04/14610.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14611.php">http://www.open-mpi.org/community/lists/devel/2014/04/14611.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----BEGIN PGP SIGNATURE-----
</span><br>
<span class="quotelev1">&gt; Version: GnuPG/MacGPG2 v2.0.22 (Darwin)
</span><br>
<span class="quotelev1">&gt; Comment: GPGTools - <a href="http://gpgtools.org">http://gpgtools.org</a>
</span><br>
<span class="quotelev1">&gt; Comment: Using GnuPG with Thunderbird - <a href="http://www.enigmail.net/">http://www.enigmail.net/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; iQIcBAEBAgAGBQJTWkSZAAoJECiO+w6Set8uDWgP/2Lnx2j1foBu85sRtHwIqU72
</span><br>
<span class="quotelev1">&gt; AdQGPvCqbiXZ3Sn32ODJgCE6lGm38W075HqETN3CFfrawvLLpAjsnLs2mdA1GcZq
</span><br>
<span class="quotelev1">&gt; buoPVuFAHQQZ4FM7y+TGUt0NyMAsMDWfBR8t9JdyMZdP7fHYhGitkuGshItivWmQ
</span><br>
<span class="quotelev1">&gt; 0j3KYzKFRe9qVGNvAc+f6eG7DnC+vUFNMZZ6APg62mYB7v//4NGhhrvHpYgD5jG2
</span><br>
<span class="quotelev1">&gt; S3kA1QfvM7xPy6rOL4gvyA6LRnFsNnQmKKLEJFXhPazwy5/5Aop8iwc2TxqVBsZE
</span><br>
<span class="quotelev1">&gt; Jw4B6ZrTKrQCzfuN4vN6jgeYHwhlZHKZqtVDMoIWHKwhJMvXlH8aTmeDqqj6sAfl
</span><br>
<span class="quotelev1">&gt; wknbew6BETuuIkszyRr0BjZrf4zjJ18vqDoRwFNa8p6Wc3cbhK96kl6fXquxTd4z
</span><br>
<span class="quotelev1">&gt; GIuRAIVqemEUGNKnGyuItYuVimkkvts5Ve5c/BxpMBT3oQX1LzOxb6+mcwzdR0dD
</span><br>
<span class="quotelev1">&gt; HK82VQlycFegLQ9+ERLgYEkcfmyZlvB+x/pwtx9RRMOd177w5fCo8hTTnkmWJNq2
</span><br>
<span class="quotelev1">&gt; jfq5cDiAW7knBJ1ZOGvMjp8RDpBMyMHjr6WCxQC3y+szR0TcMWrFUddcM2/2OBxF
</span><br>
<span class="quotelev1">&gt; YfFCP5jaeCQOOmDh1kcntcFoLw43io2xHFr/UwmfXeDhh/IFQrnEmshjvl/ZFF8n
</span><br>
<span class="quotelev1">&gt; RZogS6K9ty1C9x5GCBm4
</span><br>
<span class="quotelev1">&gt; =O0Fa
</span><br>
<span class="quotelev1">&gt; -----END PGP SIGNATURE-----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14613.php">http://www.open-mpi.org/community/lists/devel/2014/04/14613.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14617/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14618.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<li><strong>Previous message:</strong> <a href="14616.php">Ralph Castain: "Re: [OMPI devel] RFC: Well-known mca parameters"</a>
<li><strong>In reply to:</strong> <a href="14613.php">Stephen Poole: "Re: [OMPI devel] RFC: Well-known mca parameters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14619.php">Mike Dubman: "Re: [OMPI devel] RFC: Well-known mca parameters"</a>
<li><strong>Reply:</strong> <a href="14619.php">Mike Dubman: "Re: [OMPI devel] RFC: Well-known mca parameters"</a>
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
