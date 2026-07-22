// Typed models for the GithubApi2 SDK.
//
// GENERATED from the API model: main.kit.entity.<e>.fields[] and per-op
// params (op.<name>.points[].args.params[]). Field/param types come from the
// canonical type sentinels via @voxgig/sdkgen canonToType (source of truth:
// @voxgig/apidef VALID_CANON). Do not edit by hand.

export interface Artist {
  id?: string
  name?: string
  url?: string
}

export interface ArtistListMatch {
  id?: string
  name?: string
  url?: string
}

export interface Image {
  artist?: Record<string, any>
  category?: string
  height?: number
  id?: string
  thumbnail?: string
  url?: string
  width?: number
}

export interface ImageListMatch {
  artist?: Record<string, any>
  category?: string
  height?: number
  id?: string
  thumbnail?: string
  url?: string
  width?: number
}

